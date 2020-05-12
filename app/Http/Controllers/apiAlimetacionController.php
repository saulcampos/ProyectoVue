<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alimentacion;
use App\DetalleAlimentacion;
use DB;

class apiAlimetacionController extends Controller
{
    public function index()
    {
        return Alimentacion::all();

    }

 

        public function store(Request $request)
    {

DB::beginTransaction();
        
try {
        $alimenta = new Alimentacion;
        $alimenta->idalimentacion=$request->get('idalimentacion');
        $alimenta->fecha_logica=$request->get('fecha_logica');
        $alimenta->fecha=$request->get('fecha');
        $alimenta->total_costos=$request->get('total_costos');
        $alimenta->observacion=$request->get('observacion');
        $alimenta->idgalpon=$request->get('idgalpon');
        $alimenta->save();


       $detalle = $request->get('detalle');
       $sub_total_costos = $request->get('sub_total_costos');
       $sub_total_unidad_peso = $request->get('sub_total_unidad_peso');

      
       $records=[];
        
        
        
    

        for ($i=0; $i < count($detalle) ; $i++) { 
            $records[]=[
                'idalimentacion'=>$request->get('idalimentacion'),

                'idproducto'=>$detalle[$i]['idproducto'],
                'sub_total_unidad_peso'=>$sub_total_unidad_peso[$i], 
                'sub_total_costos'=>$sub_total_costos[$i]
            ];
        }

       DetalleAlimentacion::insert($records);
    }
    
catch (\Exception $e)
    {
        DB::rollback();
        // no se... Informemos con un echo por ejemplo
        echo 'ERROR (' . $e->getCode() . '): ' . $e->getMessage();
    }
    return DB::commit();

    }


    public function HistAlimentaciones($id)
    {
        return Alimentacion::where('idgalpon','=',$id)
        ->get();
    
    }

   public function DetalleHistAlimenta($id)
   {
       return DetalleAlimentacion::where('idalimentacion','=',$id)
        ->get();
   }


    
}

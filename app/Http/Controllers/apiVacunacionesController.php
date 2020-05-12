<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacunacion;
use App\DetalleVacunacion;
use DB;

class apiVacunacionesController extends Controller
{
    public function index()
    {
        return Vacunacion::all();
    }



           public function store(Request $request)
    {

DB::beginTransaction();
        
try {
        $vacuna = new Vacunacion;
        $vacuna->idvacunacion=$request->get('idvacunacion');
        $vacuna->fecha_logica=$request->get('fecha_logica');
        $vacuna->fecha=$request->get('fecha');
        $vacuna->total_costos=$request->get('total_costos');
        $vacuna->observacion=$request->get('observacion');
        $vacuna->idgalpon=$request->get('idgalpon');
        $vacuna->save();


       $detalle = $request->get('detalle');
       $sub_total_costos = $request->get('sub_total_costos');
       $sub_total_unidad_peso = $request->get('sub_total_unidad_peso');//Cuantos kilos boy a usar

      
       $records=[];
        
        
        
    

        for ($i=0; $i < count($detalle) ; $i++) { 
            $records[]=[
                'idvacunacion'=>$request->get('idvacunacion'),

                'idproducto'=>$detalle[$i]['idproducto'],
                'sub_total_unidad_peso'=>$sub_total_unidad_peso[$i], 
                'sub_total_costos'=>$sub_total_costos[$i]
            ];
        }

       DetalleVacunacion::insert($records);
    }
    
catch (\Exception $e)
    {
        DB::rollback();
        // no se... Informemos con un echo por ejemplo
        echo 'ERROR (' . $e->getCode() . '): ' . $e->getMessage();
    }
    return DB::commit();

    }


    public function HistVacunaciones($id)
    {
        return Vacunacion::where('idgalpon','=',$id)
        ->get();
    
    }



    public function DetalleHistVacuna($id)
   {
       return DetalleVacunacion::where('idvacunacion','=',$id)
        ->get();
   }

    


}

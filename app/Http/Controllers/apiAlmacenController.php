<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Almacen;
use App\DetalleAlmacen;
use App\DetalleAlmacenUse;
use App\Producto;
use App\Categoria;
use DB;

class apiAlmacenController extends Controller
{
    
    //Almacen
	 public function index()
    {
        return Almacen::all();
    }


    public function show($id)
    { 
        return Almacen::find($id);
    }


    public function store(Request $request)
    {

DB::beginTransaction();
        
try {
        $almacen = new Almacen;
        $almacen->idalmacen=$request->get('idalmacen');
        $almacen->fecha_logica=$request->get('fecha_logica');
        $almacen->fecha=$request->get('fecha');
        $almacen->descripcion=$request->get('descripcion');
        $almacen->idproveedor=$request->get('idproveedor');



        $almacen->total_costos=$request->get('total_costos');
        $almacen->save();


       $detalle = $request->get('detalle');
       $sub_total_unidades = $request->get('sub_total_unidades');
       $sub_total_costos = $request->get('sub_total_costos');
       $sub_total_unidad_peso = $request->get('sub_total_unidad_peso');

      
       $records=[];
        
        
        
    

        for ($i=0; $i < count($detalle) ; $i++) { 
            $records[]=[
                'idalmacen'=>$request->get('idalmacen'),
                'idproducto'=>$detalle[$i]['idproducto'],

                'sub_total_unidades'=>$sub_total_unidades[$i],
                'sub_total_costos'=>$sub_total_costos[$i],
                'sub_total_unidad_peso'=>$sub_total_unidad_peso[$i], 

                'en_uso'=>0,

            ];
        }

       DetalleAlmacen::insert($records);
    }
    
catch (\Exception $e)
    {
        DB::rollback();
        // no se... Informemos con un echo por ejemplo
        echo 'ERROR (' . $e->getCode() . '): ' . $e->getMessage();
    }
    return DB::commit();

    }


    public function destroy($id)
    {
        return Almacen::destroy($id);
    }



    public function EliminarDAlmacen($id){
        $Dalmacen=DB::select("DELETE  FROM detalle_almacen WHERE idalmacen = '$id'");
         return $Dalmacen;
    }

    public function DetalleAlmacen($id)
    {
        return DetalleAlmacen::where('idalmacen','=',$id)
        ->get();
    }

}

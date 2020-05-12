<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use App\Detalle_venta;
use DB;

class apiVentasController extends Controller
{
    
    public function index()
    {
        return Venta::all();
    }

    
    public function store(Request $request)
    {
    DB::beginTransaction();
        
try {
        $venta = new Venta;
        $venta->idventa=$request->get('idventa');
        $venta->fecha=$request->get('fecha');
        $venta->total_venta=$request->get('total_venta');
        $venta->idcliente=$request->get('idcliente');
        $venta->save();


        $Dventa= new Detalle_venta;
        $Dventa->idventa=$request->get('idventa');
        $Dventa->idproducto=$request->get('idproducto');
        $Dventa->cantidad=$request->get('cantidad');
        $Dventa->precio_venta=$request->get('precio_venta');
        $Dventa->save();



       
    

       

    }
    
catch (\Exception $e)
    {
        DB::rollback();
        // no se... Informemos con un echo por ejemplo
        echo 'ERROR (' . $e->getCode() . '): ' . $e->getMessage();
    }
   return DB::commit();
    }

    
    public function show($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galpon;
use App\Meta;
use App\Gallinero;
use DB;


class apiGalponesController extends Controller
{   

	public function index()
    {
         return Galpon::where('status','=',1)
        ->get();
    }

    public function GalponesInactivos()
    {
        return Galpon::where('status','=',0)
        ->get();
    }

   
    public function store(Request $request)
    {

DB::beginTransaction();
        
try {


      $meta = new Meta;
      $meta->idmeta=$request->get('idmeta');
      $meta->fecha_inicio=$request->get('fecha_inicio');
      $meta->fecha_fin=$request->get('fecha_fin');
      $meta->observacion=$request->get('observacion');
      $meta->idproducto=$request->get('idproducto');
      $meta->total=$request->get('total');
      $meta->status=1;
      $meta->save();
       /*return $meta;*/

      $galpon = new Galpon;
      $galpon->fecha=$request->get('fecha');
      $galpon->descripcion=$request->get('descripcion');
      $galpon->idmeta=$request->get('idmeta');
      $galpon->status=1;
      $galpon->idgallinero=$request->get('idgallinero');     
      $galpon->save();
     /* return $galpon; */



   }
    
  catch (\Exception $e)
    {
        DB::rollback();
        
       return 'ERROR (' . $e->getCode() . '): ' . $e->getMessage();
    }
   return DB::commit();


    }

    
    public function show($id)
    {
         return Galpon::find($id);
    }

   
    public function update(Request $request, $id)
    {
        Galpon::findOrFail($id)->update($request->all());
    }

    
    public function destroy($id)
    {
        return Galpon::destroy($id);
    }


    

    

    public function pollitosProduccion(){
      $pollitos_produccion=DB::select("
            SELECT SUM(total) as pollitosProduccion
            FROM metas 
            WHERE status =1
        ");
      return $pollitos_produccion;
    }

}

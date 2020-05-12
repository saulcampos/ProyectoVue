<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mortalidad;

class apiMortalidadesController extends Controller
{
 
  public function index()
    {
        return Mortalidad::all();
    }
   

    public function store(Request $request)
    {
      $mortalidad = new Mortalidad;
      $mortalidad->cantidad=$request->get('cantidad');
      $mortalidad->idgalpon=$request->get('idgalpon');
      $mortalidad->idproducto=$request->get('idproducto');
      $mortalidad->save();
      return $mortalidad;
    }


    public function show($id)
    {
        return Mortalidad::find($id);
    }


    public function update(Request $request, $id)
    {  
     
        Mortalidad::findOrFail($id)->update($request->all());
      
    }




    public function destroy($id)
    {
        return Mortalidad::destroy($id);
    }
}

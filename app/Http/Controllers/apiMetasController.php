<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meta;

class apiMetasController extends Controller
{
   
    public function index()
    {
         return Meta::all();
    }
    
     public function store(Request $request)
    {
  
    }

    public function show($id)
    {
         return Almacen::find($id);
    }

   public function update(Request $request, $id)
    {
        Meta::findOrFail($id)->update($request->all());
    }

    
    public function destroy($id)
    {
        return Meta::destroy($id);
    }
}

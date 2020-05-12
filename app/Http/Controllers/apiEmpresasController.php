<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class apiEmpresasController extends Controller
{
    public function index()
    {
        return Empresa::all();
    }

    
    public function store(Request $request)
    {

       $empresa = new Empresa;
       $empresa->rfc=$request->get('rfc');
       $empresa->status=1;
       
      $empresa->save();
      return $empresa;
    }

    
    public function show($id)
    {
         return Empresa::find($id);
    }

    
    public function update(Request $request, $id)
    {
       Empresa::findOrFail($id)->update($request->all());
    }

    
    public function destroy($id)
    {
        
    }
}

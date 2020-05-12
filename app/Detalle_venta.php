<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
      protected $table='detalle_venta';
  	  protected $primaryKey='iddetalle_venta';
   		public $incrementing =true;
     	public $timestamps=false;

      protected $with=['Producto'];

     protected $fillable=[
    'idventa',
    'idproducto',
    'cantidad',
    'precio_venta',
    'descuento'

       ];
    
       public function Producto()
      {
         return $this->belongsTo(Producto::class,'idproducto');
      }




}

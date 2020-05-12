<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleAlimentacion extends Model
{
        protected $table='detalle_alimentacion';
     	protected $primaryKey='iddetalle_alimentacion';
   		public $incrementing =true;
     	public $timestamps=false;

      protected $with=['Alimentacion', 'Producto'];

    	 protected $fillable=[
    	 'idalimentacion',
    	 'idproducto',
    	 'sub_total_costos',
    	 'sub_total_unidad_peso'
    	 ];

       public function Producto()
      {
         return $this->belongsTo(Producto::class,'idproducto');
      }

       public function Alimentacion()
      {
         return $this->belongsTo(Alimentacion::class,'idalimentacion');
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVacunacion extends Model
{
     	protected $table='detalle_vacunacion';
     	protected $primaryKey='iddetalle_vacunacion';
   		public $incrementing =true;
     	public $timestamps=false;

      protected $with=['Vacunacion', 'Producto'];

    	 protected $fillable=[
    	 'idvacunacion',
    	 'idproducto',
    	 'sub_total_costos',
    	 'sub_total_unidad_peso'
    	 ];

       public function Producto()
      {
         return $this->belongsTo(Producto::class,'idproducto');
      }

       public function Vacunacion()
      {
         return $this->belongsTo(Vacunacion::class,'idvacunacion');
      }
}

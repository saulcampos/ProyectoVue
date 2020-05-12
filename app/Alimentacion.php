<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alimentacion extends Model
{
    
 	protected $table='alimentaciones';
    protected $primaryKey='idalimentacion';
    public $incrementing=false;
    public $timestamps=false;

 	protected $with=['Galpon'];

    protected $fillable=[
    'idalimentacion',
    'fecha_logica',
    'fecha',
    'total_unidades_peso',
    'total_costos',
    'observacion',
    'idgalpon',
      ];


   
      public function Galpon()
      {
         return $this->belongsTo(Galpon::class,'idgalpon');
      }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacunacion extends Model
{
    protected $table='vacunaciones';
    protected $primaryKey='idvacunacion';
    public $incrementing=false;
    public $timestamps=false;

 	protected $with=['Galpon'];

    protected $fillable=[
    'idvacunacion',
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

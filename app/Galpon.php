<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galpon extends Model
{
    protected $table='galpones';
    protected $primaryKey='idgalpon';
    public $incrementing=true;
    public $timestamps=false;

    protected $with=['gallinero','meta'];//Muy importante

    protected $fillable=[
    
    'fecha',
    'descripcion',
    'idmeta',
    'idgallinero',
    ];

    public function gallinero()
      {
         return $this->belongsTo(Gallinero::class,'idgallinero');
      }


     public function meta()
      {
         return $this->belongsTo(Meta::class,'idmeta');
      }


     
}

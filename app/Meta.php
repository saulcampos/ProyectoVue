<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $table='metas';
    protected $primaryKey='idmeta';
    public $incrementing=false;
    public $timestamps=false;

 	protected $with=['producto'];

    protected $fillable=[
	'idmeta',
	'fecha_inicio',
	'fecha_fin',
	'observacion',
	'idproducto',
	'total',
	'status'

    ];


    public function producto()
      {
         return $this->belongsTo(Producto::class,'idproducto');
      }
}

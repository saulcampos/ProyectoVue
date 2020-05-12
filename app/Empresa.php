<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresas';
    protected $primaryKey='rfc';
   public $incrementing=false;
    public $timestamps=false;

   
    protected $fillable=[
	'rfc',
	'nombre',
	'mision',
	'vision',
	'valores',
	'historia',
	'telefono',
	'instagram',
	'facebook',
	'email',
	'status',
	'sobre_nosotros',
	'direccion'       
    ];
}

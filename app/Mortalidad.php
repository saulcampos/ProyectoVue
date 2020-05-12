<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mortalidad extends Model
{
    protected $table='mortalidades';
  	  protected $primaryKey='idmortalidad';
   		public $incrementing =true;
    	public $timestamps=false;
 
    	 protected $fillable=[ 	 
		'cantidad',
		'idgalpon',
		'idproducto'
		];

}

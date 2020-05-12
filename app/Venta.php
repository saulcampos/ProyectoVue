<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{

	protected $table='ventas';
    protected $primaryKey='idventa';
    public $incrementing=false;
    public $timestamps=false;

    
    protected $fillable=[
    'tipo_comprobante',
    'serie_comprobante',
    'num_comprobante',
    'fecha',
    'impuesto',
    'total_venta',
    'estado',
    'idcliente'
        ];
    



}

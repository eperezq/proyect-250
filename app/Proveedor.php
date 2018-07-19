<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public $timestamps = false;
    protected $table='proveedor';
    protected $primaryKey = 'idProveedor';
    protected $fillable = ['razonSocial','ruc','direccion','telefono1','telefono2','email1','email2'];
    protected $guarded = ['idProveedor'];
}

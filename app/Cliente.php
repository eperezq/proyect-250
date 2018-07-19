<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    protected $table='cliente';
    protected $primaryKey = 'idCliente';
    protected $fillable = [
      'razonSocial', 'direccion', 'email',
      'email2','telefono1','telefono2',
      'distrito','provincia','departamento'];

    protected $guarded = ['idCliente'];
}

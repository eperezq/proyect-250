<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{   
    public $timestamps = false;
    protected $table='platillo';
    protected $fillable=['descripcion','caracteristicas','Presentación'];
    protected $primaryKey = 'idPlatillo';
    
    
}

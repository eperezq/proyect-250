<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salida extends Model
{
    public $timestamps = false;
    protected $table='salidas';
    protected $primaryKey = 'idSalida';
    protected $fillable = ['Area','fechaRegistro'];
    protected $guarded = ['idSalida'];

    public function salidas(){
     
		return $this->hasMany('App\DetalleSalida', 'idSalida','idSalida');
	
    }
   
}

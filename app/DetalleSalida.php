<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleSalida extends Model
{
    public $timestamps = false;
    protected $table='detallesalida';
    protected $fillable=['idSalida','idProducto','cantidad','fechaSalida'];

    public function salida(){
     
		return $this->belongsTo('App\Salida','idSalida');
	
    }
    public function producto(){
     
      return $this->belongsTo('App\Producto','idProducto');
    
    }
 
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleEntrada extends Model
{
    public $timestamps = false;
    protected $fillable=['idProveedor','nroDocumento','serie','idTipoComp','idProducto','cantidad','precioUnitario','fechaVencimiento'];
    
    protected $table='detallentrada';

    public function proveedor(){
     
		return $this->belongsTo('App\Proveedor','idProveedor');
	
    }
    
    public function comprobante(){
     
		return $this->belongsTo('App\TipoComprobante','idTipoComp');
	
    }
    public function producto(){
     
		return $this->belongsTo('App\Producto','idProducto');
	
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoComprobante extends Model
{
    public $timestamps = false;
    protected $table='tipocomprobante';
    protected $primaryKey = 'idTipoComp';
    protected $fillable = ['idTipoComp','descripcion'];
    protected $guarded = 'idTipoComp';
    

    public function entradas(){
     
		return $this->hasMany('App\DetalleEntrada', 'idTipoComp','idTipoComp');
	
    }
}

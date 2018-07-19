<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    public $timestamps = false;
    protected $table='productos';
    protected $primaryKey = 'idProducto';
    protected $fillable = ['descripcion','presentacion','unidadMedida','marca',
                          'caracteristicas','stockMinimo','stockAlmacen','fechaVencimiento',
                          'idCategoria'];
    protected $guarded = ['idProducto'];

    public function categoria(){
     
		return $this->belongsTo('App\Categoria','idCategoria');
	
    }

    public function salidas(){
     
      return $this->hasMany('App\DetalleSalida','idproducto','idproducto');
    
      }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    protected $table='categoria';
    protected $primaryKey = 'idCategoria';
    protected $fillable = ['descripcion'];
    protected $guarded = ['idCategoria'];

    public function productos(){
     
		return $this->hasMany('App\Producto', 'idCategoria','idCategoria');
	
    }
}

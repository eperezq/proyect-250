<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cargo;
class Empleado extends Model
{
    public $timestamps = false;
    protected $table='empleado';
    protected $primaryKey = 'idEmpleado';
    protected $fillable = [
      'nroDocum', 'appaterno', 'apmaterno',
      'nombres','fechaNacimiento','lugarNacimiento',
      'direccion','email','email2','telefono1','telefono2','idCargo'];

    protected $guarded = ['idEmpleado'];
    

    // public function getRouteKeyName(){
    //   return 'nombres';
    // }

    public function cargo(){
     
		return $this->belongsTo('App\Cargo','idCargo');
	
    }
}

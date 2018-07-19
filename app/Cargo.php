<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;
class Cargo extends Model
{
    protected $table='cargo';
    protected $primaryKey = 'idCargo';

    public function empleados(){
     
		return $this->hasMany('App\Empleado', 'idEmpleado','idCargo');
	
    }

}

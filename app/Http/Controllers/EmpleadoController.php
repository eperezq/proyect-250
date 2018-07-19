<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use App\Cargo;
use App\Http\Requests\EmpleadoRequest;
use App\Http\Requests\EmpleadoEditRequest;
class EmpleadoController extends Controller
{

    public function index(){
        $cargos=Cargo::all();
        $empleados=Empleado::orderBy('idEmpleado','desc')->paginate(10);
        // $empleados=Empleado::all();
        return view('empleado.emple-show',compact('empleados','cargos'));
    }
   
    public function create(){
        $cargos=Cargo::all();   
        return view('empleado.emple-create',compact('cargos'));
     }
     public function store(EmpleadoRequest $request){
        
        $empleado = Empleado::create(request()->all());
        // dd($empleado);
        return redirect()->back()->with('message-create', 'Empleado Creado Correctamente');
    }

    public function edit(Empleado $id){
        $cargos=Cargo::all();
        // dd($cargos);
        // $empleados=Empleado::where('idEmpleado',$id)->get()->first();  
      
        return view('empleado.emple-edit',compact('empleados','cargos','id'));
    }
  

    

    public function update(Empleado $id,EmpleadoEditRequest $request){
       
        $id ->update(request()->all());
        //  dd($id);
        return redirect()->back()->with('message-update', 'Empleado Actualizado Correctamente');
    }
    public function destroy(Empleado $id){
       
        $id->delete();
        return redirect()->back()->with('message-delete', 'Empleado Eliminado Correctamente');
    }
}

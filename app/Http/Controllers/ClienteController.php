<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\cliente\ClienteRequest;

class ClienteController extends Controller
{
    public function index(){
        // $clientes=Cliente::all();
        $clientes=Cliente::orderBy('idCliente','desc')->get();
        // return $categorias;
        return view('cliente.clie-show',compact('clientes'));
    }
   
    public function create(){
         
        return view('cliente.clie-create');
     }
     public function store(ClienteRequest $request){
        
        $clientes = Cliente::create(request()->all());
        // dd($categoria);
        return redirect()->back()->with('message-create', 'Cliente creado Correctamente');
    }

    public function edit(Cliente $id){
        return view('cliente.clie-edit',compact('id'));
    }
  

    

    public function update(Cliente $id,ClienteRequest $request){
       
        $id ->update(request()->all());
         
        return redirect()->back()->with('message-update', 'Cliente Actualizado Correctamente');
    }
    public function destroy(Cliente $id){
       
        $id->delete();
        return redirect()->back()->with('message-delete', 'Cliente Eliminado Correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Http\Requests\producto\ProductoRequest;
class ProductoController extends Controller
{
    public function index(){
        $productos=Producto::orderBy('idProducto','desc')->paginate(10);
        $categorias=Categoria::all();
        // $productos=Producto::all();
        return view('producto.produ-show',compact('productos','categorias'));
    }

    public function create(){
        $categorias=Categoria::all();
        return view('producto.produ-create',compact('categorias'));
    }
    public function store(ProductoRequest $request){
        $productos = Producto::create(request()->all());
    //    return $productos;
        return redirect()->back()->with('message-create', 'Producto Creado Correctamente');
       
    }
    public function edit(Producto $id){
     $categorias=Categoria::all();
     return view('producto.produ-edit',compact('id','categorias'));
    }
    public function update(Producto $id,ProductoRequest $request){
        // return $id;
        $id ->update(request()->all());
        return redirect('producto')->with('message-update', 'Producto Actualizado Correctamente');
    }
    public function destroy(Producto $id){
       
        $id->delete();
        return redirect()->back()->with('message-delete', 'Producto Eliminado Correctamente');
    }
}

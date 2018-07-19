<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Http\Requests\categoria\CategoriaRequest;
class CategoriaController extends Controller
{
    public function index(){
        // $categorias=Categoria::all()->sortBy('idcategoria');
        $categorias = Categoria::orderBy('idCategoria','desc')->get();
        // return $categorias;
        return view('categoria.cate-show',compact('categorias'));
    }
   
    public function create(){
         
        return view('categoria.cate-create');
     }
     public function store(CategoriaRequest $request){
        
        $categoria = Categoria::create(request()->all());
        // dd($categoria);
        return redirect()->back()->with('message-create', 'Categoria creado Correctamente');
    }

    public function edit(Categoria $id){
        return view('categoria.cate-edit',compact('id'));
    }
  

    

    public function update(Categoria $id,CategoriaRequest $request){
       
        $id ->update(request()->all());
         
        return redirect()->back()->with('message-update', 'Categoria actualizada Correctamente');
    }
    public function destroy(Categoria $id){
       
        $id->delete();
        return redirect()->back()->with('message-delete', 'Categoria eliminada Correctamente');
    }
}

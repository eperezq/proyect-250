<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Platillo;
class PlatilloController extends Controller
{
    public function index()
    {
        $platillos=Platillo::orderby('idPlatillo','desc')->paginate(10);
        return view('platillo.plati-show',compact('platillos'));
    }
    public function create()
    {
        
        return view('platillo.plati-create');
    }
    public function store()
    {
        $id=Platillo::max('idPlatillo');
        $idmas=$id+1;
        $platillo=new Platillo;
        $platillo->idPlatillo=$idmas;
        $platillo->descripcion=request()->descripcion;
        $platillo->caracteristicas=request()->caracteristicas;
        $platillo->Presentación=request()->Presentación;
        // return $platillo;
        $platillo->save();
        return redirect()->back()->with('message-create', 'Platillo creado Correctamente');
    }
    public function edit(Platillo $id)
    {
        return view('platillo.plati-edit',compact('id'));
    }

    
    public function update(Platillo $id)
    {
      
        $id ->update(request()->all());
        
        return redirect()->back()->with('message-update', 'Platillos Actualizado Correctamente');
        
    }

    public function destroy(Platillo $id){
    //    return $id;
        $id->delete();
        return redirect()->back()->with('message-delete', 'Platillos Eliminado Correctamente');
    }

  

    
}

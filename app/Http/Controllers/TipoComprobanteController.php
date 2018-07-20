<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoComprobante;
class TipoComprobanteController extends Controller
{
    public function index()
    {
       $comprobantes=TipoComprobante::orderby('idTipoComp','desc')->get();
       return view('comprobante.comprobante-show',compact('comprobantes'));
    }
    public function create()
    {
       return view('comprobante.comprobante-create');
    }
    public function store()
    {
        
        $comprobante = TipoComprobante::create(request()->all());
        // return $comprobante;
        return redirect()->back()->with('message-create', 'Comprobante Creado Correctamente');
    }
    public function edit(TipoComprobante $id)
    {
        
        return view('comprobante.comprobante-edit',compact('id'));
    }
    public function update(TipoComprobante $id)
    {
        
        $id ->update(request()->all());
        // return $id;
        return redirect('comprobante')->with('message-update', 'Comprobante Actualizado Correctamente');
    }
    public function destroy(TipoComprobante $id){
        // return $id;
        $id->delete();
        return redirect()->back()->with('message-delete', 'Comprobante Eliminado Correctamente');
    }
}

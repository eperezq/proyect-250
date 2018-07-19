<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Producto;
use App\DetalleEntrada;
use App\TipoComprobante;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
class DetalleEntradaController extends Controller
{
    public function index(){
        $detallesen = DetalleEntrada::orderBy('fechaVencimiento','desc')->get();
        $proveedores=Proveedor::all();
        $productos=producto::all();
        $tipocomprobantes=TipoComprobante::all();
        return view('detalleEntrada.deta-show',compact('detallesen','proveedores','productos','tipocomprobantes'));
    }
    public function create(){
        $proveedores=Proveedor::all();
        $productos=producto::all();
        $tipocomprobantes=TipoComprobante::all();
        return view('detalleEntrada.deta-create',compact('proveedores','productos','tipocomprobantes'));
    }

    public function store(){


        $detalles=new DetalleEntrada;
        $detalles->idProveedor=request()->idProveedor;
        $detalles->nroDocumento=request()->nroDocumento;
        $detalles->serie=request()->serie;
        $detalles->idTipoComp=request()->idTipoComp;
        $detalles->idProducto=request()->idProducto;
        $detalles->cantidad=request()->cantidad;
        $detalles->precioUnitario=request()->precioUnitario;
        $detalles->fechaVencimiento=request()->fechaVencimiento;
        // return $detalles;    
        $detalles->save();

        $request = new DetalleEntrada;
        $request=request()->cantidad;
        $cadenaconvert =(string) $request;

        $id = new DetalleEntrada;
        $id=request()->idProducto;
        $idconvert =(string) $id;
 
        $det=Producto::find($id);
        $det1= $det->idProducto;
        //  return $det1;
        if ($det1== $idconvert) {
            $cantidad = DB::table('productos')->where('idProducto',$det1)->max('stockAlmacen');
            $suma=$cadenaconvert + $cantidad;
            DB::table('productos')
            ->where('idProducto', $det1)
            ->update(['stockAlmacen' => $suma]);
            // return 'se sumo correctamente';
        }
        // else {
        //     return 'no se agrego correctamente';
        // }
 

            return redirect()->back()->with('message', 'Detalle creado Correctamente');
       
    }
    public function edit(DetalleEntrada $id)
    {
        return view('detalleEntrada.deta-edit',compact('id'));
    }
}

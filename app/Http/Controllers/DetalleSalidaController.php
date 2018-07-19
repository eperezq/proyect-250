<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use App\Producto;
use App\DetalleEntrada;
use App\DetalleSalida;
use App\TipoComprobante;
use App\Salida;

use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;

class DetalleSalidaController extends Controller
{
    public function index(){
        $salidas=Salida::all();
        // return $salidas;
        $productos=producto::all();
        $detallessa = DetalleSalida::orderBy('fechaSalida')->get();
        return view('detalleSalida.sali-show',compact('detallessa','salidas','productos'));
    }
    public function create(){
        $salidas=Salida::all();
        $productos=producto::all();
       
        return view('detalleSalida.sali-create',compact('productos','salidas'));
    }

    public function store(){

        $datefin = Carbon::now('America/Lima')->toDateTimeString();
        $salida=new DetalleSalida;
       
        $salida->idSalida=request()->idSalida;
        $salida->idProducto=request()->idProducto;
        $salida->cantidad=request()->cantidad;
        $salida->fechaSalida=$datefin;
       
        //  return $salida; 
        $salida->save();

        $request = new DetalleSalida;
        $request=request()->cantidad;
        $cadenaconvert =(string) $request;

        $id = new DetalleSalida;
        $id=request()->idProducto;
        $idconvert =(string) $id;
 
        $det=Producto::find($id);
        $det1= $det->idProducto;
        //  return $det1;
        if ($det1== $idconvert) {
            $cantidad = DB::table('productos')->where('idProducto',$det1)->max('stockAlmacen');
            $resta=$cantidad - $cadenaconvert;
            DB::table('productos')
            ->where('idProducto', $det1)
            ->update(['stockAlmacen' => $resta]);
             
        }
        // else {
        //     return 'no se agrego correctamente';
        // }
 
         
         return redirect()->back()->with('message', 'Detalle creado Correctamente');
       
    }

}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('componentes/inicio');
});



// Route::group(['middleware'=>'Administrador'],function(){
    Route::get('empleado','EmpleadoController@index')->name('empleado');
    Route::get('editarempleado/{id}/editar','EmpleadoController@edit')->name('editarempleados');
    Route::get('create','EmpleadoController@create')->name('creareturn');
    Route::post('crearempleado','EmpleadoController@store')->name('crearempleados');
    Route::patch('/{id}','EmpleadoController@update')->name('update');
    Route::delete('/{id}','EmpleadoController@destroy')->name('eliminarempleado');
// });
    
    Route::get('categoria','CategoriaController@index')->name('categoria');
    Route::get('crearcategoria','CategoriaController@create')->name('categoriashow');
    Route::post('crearcategoria','CategoriaController@store')->name('categoriacreate');
    Route::get('categoria/{id}/editar','CategoriaController@edit')->name('categoriaedit');
    Route::patch('categoria/{id}','CategoriaController@update')->name('categoriaupdate');
    Route::delete('categoria/{id}','CategoriaController@destroy')->name('categoriadelete');



    Route::get('proveedor','ProveedorController@index')->name('proveedor');
    Route::get('crearproveedor','ProveedorController@create')->name('proveedorshow');
    Route::post('crearproveedor','ProveedorController@store')->name('proveedorcreate');
    Route::get('proveedor/{id}/editar','ProveedorController@edit')->name('proveedoredit');
    Route::patch('proveedor/{id}','ProveedorController@update')->name('proveedorupdate');
    Route::delete('proveedor/{id}','ProveedorController@destroy')->name('proveedordelete');

    Route::get('cliente','ClienteController@index')->name('cliente');
    Route::get('crearcliente','ClienteController@create')->name('clienteshow');
    Route::post('crearcliente','ClienteController@store')->name('clientecreate');
    Route::get('cliente/{id}/editar','ClienteController@edit')->name('clienteedit');
    Route::patch('cliente/{id}','ClienteController@update')->name('clienteupdate');
    Route::delete('cliente/{id}','ClienteController@destroy')->name('clientedelete');


    Route::get('producto','ProductoController@index')->name('producto');
    Route::get('crearproducto','ProductoController@create')->name('productoshow');
    Route::post('crearproducto','ProductoController@store')->name('productocreate');
    Route::get('producto/{id}/editar','ProductoController@edit')->name('productoedit');
    Route::patch('producto/{id}','ProductoController@update')->name('productoupdate');
    Route::delete('producto/{id}','ProductoController@destroy')->name('productodelete');




    
    Route::get('platillo','PlatilloController@index')->name('platillo');
    Route::get('crearplatillo','PlatilloController@create')->name('platilloshow');
    Route::post('crearplatillo','PlatilloController@store')->name('platillocreate');
    Route::get('platillo/{id}/editar','PlatilloController@edit')->name('platilloedit');
    Route::patch('platillo/{id}','PlatilloController@update')->name('platilloupdate');
    Route::delete('platillo/{id}','PlatilloController@destroy')->name('platillodelete');



    
    Route::get('comprobante','TipoComprobanteController@index')->name('comprobante');
    Route::get('crearcomprobante','TipoComprobanteController@create')->name('comprobanteshow');
    Route::post('crearcomprobante','TipoComprobanteController@store')->name('comprobantecreate');
    Route::get('comprobante/{id}/editar','TipoComprobanteController@edit')->name('comprobanteedit');
    Route::patch('comprobante/{id}','TipoComprobanteController@update')->name('comprobanteupdate');
    Route::delete('comprobante/{id}','TipoComprobanteController@destroy')->name('comprobantedelete');


    Route::get('salida','SalidaController@index')->name('salida');
    Route::get('crearsalida','SalidaController@create')->name('salidashow');
    Route::post('crearsalida','SalidaController@store')->name('salidacreate');
    Route::get('salida/{id}/editar','SalidaController@edit')->name('salidaedit');
    Route::patch('salida/{id}','SalidaController@update')->name('salidaupdate');
    Route::delete('salida/{id}','SalidaController@destroy')->name('salidadelete');



   // detalle entrada
   Route::get('entrada','DetalleEntradaController@index')->name('detallentrada');
   Route::get('detaentra','DetalleEntradaController@create')->name('detallentradashow');
   Route::post('detaentra','DetalleEntradaController@store');
   Route::get('detaentra/{id}/editar','DetalleEntradaController@edit')->name('detallentradaedit');


    // detalle salida
    Route::get('detasalida','DetalleSalidaController@index')->name('detallesalida');
    Route::get('creardetasalida','DetalleSalidaController@create')->name('salidashow');
    Route::post('creardetasalida','DetalleSalidaController@store')->name('creardetasalida');



Route::get('error', function () {
   abort(404);
});
Route::get('error', function () {
    abort(503);
 });
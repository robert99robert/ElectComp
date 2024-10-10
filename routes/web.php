<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ComprobarController;

Route::get('/', HomeController::class)->name("home");
#http://localhost/formacion_general_2/public/

Route::controller(NosotrosController::class)->group(function(){
    Route::get('/nosotros', 'index');
    #http://localhost/formacion_general_2/public/nosotros
    Route::get('/nosotros/{variable}', 'form');
    #http://localhost/formacion_general_2/public/nosotros/xd
});

Route::controller(DeviceController::class)->group(function(){
    Route::get('/device/listar', 'listar')->name("device.listar");// primer string es la ruta que seguirá
                                    // segundo string es la función que retorna la vista
    Route::get('/device/crear', 'crear')->name("device.crear");
    Route::post('/device/almacenar', 'almacenar')->name("device.almacenar");
    Route::get('device/{id}/editar', 'editar')->name('device.editar');
    Route::put('device/{id}', 'actualizar')->name('device.actualizar');
    Route::get('device/{id}/eliminar', 'eliminar')->name('device.eliminar');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/user/crear', 'crear')->name("user.crear");// primer string es la ruta que seguirá
    Route::post('/user/almacenar', 'almacenar')->name("user.almacenar");
});


Route::controller(ComprobarController::class)->group(function(){
    Route::get('/comprobar', 'comprobar')->name("comprobador.comprobar");// primer string es la ruta que seguirá
});
//Route::get('/xdxdxd/crear', 'crear')->name("device.crear"); primer string es la ruta vista en el navegador y el segundo es la función del controlador

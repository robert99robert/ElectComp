<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

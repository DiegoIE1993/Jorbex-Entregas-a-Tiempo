<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\GeneroController;
use App\Http\Controllers\Admin\CargoController;
use App\Http\Controllers\Admin\TipoDocumentoController;
use App\Http\Controllers\Admin\TipoDireccionController;
use App\Http\Controllers\Admin\FormaPagoController;
use App\Http\Controllers\Admin\TipoEnvioController;
use App\Http\Controllers\Admin\TipoUsuarioController;
use App\Http\Controllers\Admin\FranjaHorariaController;
use App\Http\Controllers\Admin\EmpleadoController;
use App\Http\Controllers\Admin\RecogidaController;



Route::get('', [HomeController::class, 'index']);
Route::resource('admin/generos', GeneroController::class)->names('admin.generos');
Route::resource('cargos', CargoController::class)->names('admin.cargos');
Route::resource('tipodocumentos',TipoDocumentoController::class)->names('admin.tipodocumentos');
Route::resource('tipodirecciones',TipoDireccionController::class)->names('admin.tipodirecciones');
Route::resource('formapagos',FormaPagoController::class)->names('admin.formapagos');
Route::resource('tipoenvios',TipoEnvioController::class)->names('admin.tipoenvios');
Route::resource('tipousuarios',TipoUsuarioController::class)->names('admin.tipousuarios');
Route::resource('franjahoraria',FranjaHorariaController::class)->names('admin.franjahoraria');
Route::resource('empleados',EmpleadoController::class)->names('admin.empleados');
Route::resource('recogidas',RecogidaController::class)->names('admin.recogidas');
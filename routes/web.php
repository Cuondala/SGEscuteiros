<?php

use App\Http\Controllers\AgrupamentoController;
use App\Http\Controllers\DirigenteController;
use App\Http\Controllers\DirigenteFuncaoController;
use App\Http\Controllers\NucleoController;
use App\Http\Controllers\UnidadeAutonomaController;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Route;

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

    return view('layout.app');
});


Route::group(['prefix'=>'admin'], function(){

    //Nucleos
    Route::get('nucleos/index', [NucleoController::class, 'index'])->name('nucleos.index');
    Route::get('nucleos/create', [NucleoController::class, 'create'])->name('nucleos.create');
    Route::post('nucleos/store', [NucleoController::class, 'store'])->name('nucleos.store');
    Route::get('/nucleos/show/{id}', [NucleoController::class, 'show'])->name('nucleos.show');
    Route::get('/nucleos/edit/{id}', [NucleoController::class, 'edit'])->name('nucleos.edit');
    Route::put('/nucleos/update/{id}', [NucleoController::class, 'update'])->name('nucleos.update');
    Route::delete('/nucleo/delete/{id}', [NucleoController::class, 'destroy'])->name('nucleos.destroy');


    //Agrupamentos

    Route::get('agrupamentos/index', [AgrupamentoController::class, 'index'])->name('agrupamentos.index');
    Route::get('agrupamentos/create', [AgrupamentoController::class, 'create'])->name('agrupamentos.create');
    Route::post('agrupamentos/store', [AgrupamentoController::class, 'store'])->name('agrupamentos.store');
    Route::get('agrupamentos/show/{id}', [AgrupamentoController::class, 'show'])->name('agrupamentos.show');
    Route::get('agrupamentos/edit/{id}', [AgrupamentoController::class, 'edit'])->name('agrupamentos.edit');
    Route::put('agrupamentos/update/{id}', [AgrupamentoController::class, 'update'])->name('agrupamentos.update');
    Route::delete('agrupamentos/destroy/{id}', [AgrupamentoController::class, 'destroy'])->name('agrupamentos.destroy');

    //Dirigente Funcao

    Route::get('fucao/index', [DirigenteFuncaoController::class, 'index'])->name('fucoes.index');
    Route::post('fucao/store', [DirigenteFuncaoController::class, 'store'])->name('fucoes.store');
    Route::put('fucao/update/{id}', [DirigenteFuncaoController::class, 'update'])->name('fucoes.update');
    Route::delete('fucao/destroy{id}', [DirigenteFuncaoController::class, 'destroy'])->name('fucoes.destroy');




    //Dirigentes
    Route::get('dirigentes/index', [DirigenteController::class, 'index'])->name('dirigentes.index');
    Route::get('dirigentes/create', [DirigenteController::class, 'create'])->name('dirigentes.create');
    Route::post('dirigentes/store', [DirigenteController::class, 'store'])->name('dirigentes.store');
    Route::get('dirigentes/show/{id}', [DirigenteController::class, 'show'])->name('dirigentes.show');
    Route::get('dirigentes/edit/{id}', [DirigenteController::class, 'edit'])->name('dirigentes.edit');
    Route::put('dirigentes/update/{id}', [DirigenteController::class, 'update'])->name('dirigentes.update');
    Route::delete('dirigentes/destroy/{id}', [DirigenteController::class, 'destroy'])->name('dirigentes.destroy');

    //Unidades Autonomas
    Route::get('unidadesAutonomas/index', [UnidadeAutonomaController::class, 'index'])->name('ua.index');
    Route::get('unidadesAutonomas/create', [UnidadeAutonomaController::class, 'create'])->name('ua.create');
    Route::post('unidadesAutonomas/store', [UnidadeAutonomaController::class, 'store'])->name('ua.store');
    //Route::get('unidadesAutonomas/show/{id}', [UnidadeAutonomaController::class, 'show'])->name('ua.show');
    Route::get('unidadesAutonomas/edit/{id}', [UnidadeAutonomaController::class, 'edit'])->name('ua.edit');
    Route::put('unidadesAutonomas/update/{id}', [UnidadeAutonomaController::class, 'update'])->name('ua.update');
    Route::delete('unidadesAutonomas/destroy/{id}', [UnidadeAutonomaController::class, 'destroy'])->name('ua.destroy');



});

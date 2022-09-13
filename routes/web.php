<?php

use App\Http\Controllers\NucleoController;
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
});

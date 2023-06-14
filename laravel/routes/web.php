<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clothesController;
use App\Http\Controllers\shoesController;
use App\Http\Controllers\pantsController;
use App\Http\Controllers\hatsController;
use App\Http\Controllers\accessoryController;

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
    return view('welcome');
});
// Route::get('/clothes',function(){
//     return view('clothes');
// });

Route::get('/clothes',[clothesController::class,'clothes']);
Route::get('/clothes/create',[clothesController::class,'create']);
Route::get('/clothes/compare', [clothesController::class, 'compare'])->name('clothes.compare');
Route::post('/clothes/addclothes',[clothesController::class,'addclothes']);

Route::get('/shoes',[shoesController::class,'shoes']);
Route::get('/shoes/create1',[shoesController::class,'create1']);
Route::get('/shoes/compare', [shoesController::class, 'compare'])->name('shoes.compare');
Route::post('/shoes/addshoes',[shoesController::class,'addshoes']);

Route::get('/pants',[pantsController::class,'pants']);
Route::get('/pants/create2',[pantsController::class,'create2']);
Route::get('/pants/compare', [pantsController::class, 'compare'])->name('pants.compare');
Route::post('/pants/addpants',[pantsController::class,'addpants']);

Route::get('/hats',[hatsController::class,'hats']);
Route::get('/hats/create3',[hatsController::class,'create3']);
Route::get('/hats/compare', [hatsController::class, 'compare'])->name('hats.compare');
Route::post('/hats/addhats',[hatsController::class,'addhats']);

Route::get('/accessory',[accessoryController::class,'accessory']);
Route::get('/accessory/create4',[accessoryController::class,'create4']);
Route::get('/accessory/compare', [accessoryController::class, 'compare'])->name('accessory.compare');
Route::post('/accessory/addaccessory',[accessoryController::class,'addaccessory']);
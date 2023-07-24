<?php

use App\Http\Controllers\Respuesta;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Respuesta::class,'index']);
Route::post('/save',[Respuesta::class,'store'])->name('encuesta.save');
Route::get('/finish',[Respuesta::class,'finish'])->name('encuesta.fin');

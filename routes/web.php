<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

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
https://www.udemy.com/course/curso-completo-do-desenvolvedor-laravel/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('verified');
Route::resource('tarefa', 'App\Http\Controllers\TarefaController')->middleware('verified');; //->middleware('auth');
//Route::resource('tarefa', 'TarefaController'); //Route service provider, descomentar

Route::get('/mensagem-teste', function(){
    //return new MensagemTesteMail();
    Mail::to('thainaspiress2@gmail.com')->send(new MensagemTesteMail());
    return 'Email enviado com sucesso';
});
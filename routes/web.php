<?php

use App\Http\Controllers\InstituicaoController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;
use app\Http\Livewire\Admin\Crudtab\CrudTableComponent;

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
    return view('index');
});

Route::get('/semraiva', function () {
    return view('admin.sesau.semraiva.semraiva.index');
});


Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/ficha', function () {
    return view('admin.sesau.semraiva.ficha.index');
});

Route::get('/samu', function () {
    return view('admin.sesau.samu.samu.index');
});

Route::get('/voluntario', function () {
    return view('admin.sesau.voluntario.index');
});

Route::get('/juridico', function () {
    return view('admin.sesau.juridico.juridicos.index');
});

Route::get('/residencia', function () {
    return view('admin.sesau.residencia.index');
});

Route::post('instituicao/export-excel', [InstituicaoController::class, 'exportExcel'])->name('instituicao.download-excel');
<?php
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
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
Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/catalog', [CatalogController::class, 'getIndex']);
Route::get('/catalog/show/{id}', [CatalogController::class, 'getShow']);
Route::get('/catalog/create',[CatalogController::class, 'getCreate']); 

Route::get('/catalog/edit/{id}',[CatalogController::class, 'getEdit']);

/*
Route::get('/registrar',[RegistrarController::class,'index'])->name('crear-cuenta');
Route::post('/registrar',[RegistrarController::class,'store']);

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);

Route::get('/noticias',[PostController::class,'index'])->name('posts.index');
*/





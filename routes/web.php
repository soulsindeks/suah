<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
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
    return view('pages.content');
});

Route::get('/isi', function () {
    return view('pages.isi');
});

Route::get('/form', function () {
    return view('pages.form');
});

// Route::get('/user', [UserController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user', [UserController::class, 'index']);

// Route::resource('user', UserController::class);

Route::post('user', [UserController::class, 'store']);
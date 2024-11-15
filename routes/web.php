<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index', function () {
//     return view('index'); //merujuk kehalaman welcome.blade.php di folder resource/views
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/about', function () {
//     return view('about');
// });

route::get('/index', [HomeController::class, 'index'])-> name('index');
route::get('/login', [HomeController::class, 'login'])-> name('login');
route::get('/about', [HomeController::class, 'about'])-> name('about');

route::post('/upload-photo', [PhotoController::class, 'store'])->name('upload.photo');

<?php

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
    return view('auth.login');
});
// Route::get('/halamanuser', function () {
//     return view('halamanuser');
// });
Route::get('/template2', function () {
    return view('template.template2');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('blog', BlogController::class)->middleware('checkRole:admin');
Route::resource('user', UserController::class)->middleware(['checkRole:admin,user']);
use App\Http\Controllers\BlogController;
Route::get('/search', [BlogController::class, 'search'])->name('search');
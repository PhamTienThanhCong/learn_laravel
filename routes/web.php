<?php

use App\Http\Controllers\DemoController;
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

Route::get('/courses', [DemoController::class, 'index'])->name('course.index');
Route::get('/courses/create', [DemoController::class, 'create'])->name('course.create');
Route::post('/courses/create/save' , [DemoController::class, 'store'])->name('course.create.save');
Route::delete('/courses/delete/{demo}', [DemoController::class, 'destroy'])->name('course.delete');
Route::get('/courses/edit/{demo}', [DemoController::class, 'edit'])->name('course.edit');
Route::put('/courses/update/{demo}', [DemoController::class, 'update'])->name('course.update');
Route::get('/', function () {
    return view('welcome');
});

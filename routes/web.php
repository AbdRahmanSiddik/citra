<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PythonScriptController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::post('/image_edit', [PagesController::class, 'procces']);
Route::get('/image_edit', [PagesController::class, 'edit_image'])->name('histo.rgb');
Route::get('/histogram/all', [PythonScriptController::class, 'show_histogram_detail']);
Route::get('/histogram/rgb/all', [PythonScriptController::class, 'show_histogram_rgb_detail']);
Route::get('/image_edit/gray', [PagesController::class, 'gray_image'])->name('hist.gray');
Route::get('/histogram/gray', [PythonScriptController::class, 'show_gray_histogram_detai']);
Route::get('/image_edit/normalized', [PagesController::class, 'normalize_rgb'])->name('hist.normalized');
Route::get('/image_edit/gray/normalized', [PagesController::class, 'normalize_gray'])->name('hist.gray_normalized');

function set_active($routeName)
{
    return Route::currentRouteNamed($routeName) ? 'active' : '';
}

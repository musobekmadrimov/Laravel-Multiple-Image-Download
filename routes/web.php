<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;


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

Route::get('/image-upload', [FileUpload::class, 'createForm']);
Route::get('/all-images', [FileUpload::class, 'allImages']);

Route::post('/image-upload', [FileUpload::class, 'fileUpload'])->name('imageUpload');

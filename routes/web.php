<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\B2Controller;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\OurStoreController;
use App\Http\Controllers\FileStoreController;

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
    return view('homepage');
});

Route::get('find-b2-keys', function () {
    return view('find-b2-keys')->middleware('auth');
});

Route::match(['GET', 'POST'], 'connect-b2', [B2Controller::class, 'index'])->name('connectb2')->middleware('auth');

Route::match(['GET', 'POST'], 'add-domain-name', [DomainController::class, 'index'])->name('add-domain-name')->middleware('auth');

Route::get('/upload', function () {
    return view('upload-files');
})->middleware('auth')->name('upload');

Route::get('/upload-online-file', function () {
    return view('upload-online-files');
})->middleware('auth');

Route::get('/upload-local-file', function () {
    return view('upload-local-files');
})->middleware('auth');

Route::get('{id?}/upload-success', [FileController::class, 'index'])->name('success')->middleware('auth');
Route::get('upload-failed', [FileController::class, 'failed'])->name('failed')->middleware('auth');
Route::get('delete-failed', [FileController::class, 'delete_failed'])->middleware('auth');


Route::get('show/{id}',[FileController::class, 'show_single_file'])->middleware('auth');
Route::post('delete-file',[FileController::class, 'delete_file'])->middleware('auth');
Route::get('delete-file-success',[FileController::class, 'delete_file_success'])->middleware('auth');

// File Store
Route::get('my-files/{category?}',[FileStoreController::class, 'my_files'])->name('my-files')->middleware('auth');
Route::get('public-files/{category?}',[FileStoreController::class, 'public_files']);


// our store
Route::get('store/upload-online-file',[OurStoreController::class, 'upload_online_file'])->middleware('auth');
Route::get('store/upload-local-file',[OurStoreController::class, 'upload_local_file'])->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/{slug}', function () {
    return view('404');
});

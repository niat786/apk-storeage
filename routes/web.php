<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\B2Controller;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\OurStoreController;
use App\Http\Controllers\FileStoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;

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

Route::prefix('admin')->group(function () {
    Route::get('users', [AdminController::class, 'users'])->middleware('auth')->name('users');
    Route::get('files', [AdminController::class, 'files'])->middleware('auth')->name('files');
    //Route::get('public-files', [AdminController::class, 'public_files'])->middleware('auth')->name('public-files');
});


Route::prefix('download-file')->group(function () {
    Route::get('files', [DownloadController::class, 'all_files']);
    Route::get('show/{id}', [DownloadController::class, 'show_single_file']);
    Route::get('file-is-ready', [DownloadController::class, 'test_download_page'])->name('generate-download-link'); // signed
    Route::get('files/{user_id}/{file_name}', [DownloadController::class, 'show_file']);
    Route::get('/{user_id}/{file_name}', [DownloadController::class, 'download_file']);
});
Route::prefix('download')->group(function () {
    Route::get('files/{id}/{name}', [DownloadController::class, 'redirect_download_page']);
});

Route::prefix('account')->middleware('auth')->group(function () {
    Route::get('manage', function () {
        return view('manage-account.domain');
    })->name('manage-account');
    Route::put('update-domain', [DomainController::class, 'update_domain']);
    Route::delete('delete-domain', [DomainController::class, 'delete_domain']);
    Route::delete('delete-bucket', [DomainController::class, 'delete_bucket']);
});

Route::prefix('blog')->group(function(){
    Route::get('/', [BlogController::class, 'index']);
});

Route::prefix('page')->group(function(){
    Route::get('about-us', [PagesController::class, 'about_us']);
    Route::get('contact-us', [PagesController::class, 'contact_us']);
    Route::get('disclaimer', [PagesController::class, 'disclaimer']);
    Route::get('privacy-policy', [PagesController::class, 'privacy_policy']);
});


Route::get('find-b2-keys', function () {
    return view('find-b2-keys');
})->middleware('auth');

Route::match(['GET', 'POST'], 'connect-b2', [B2Controller::class, 'index'])->name('connectb2')->middleware('auth');

Route::match(['GET', 'POST'], 'add-domain-name', [DomainController::class, 'index'])->name('add-domain-name')->middleware('auth');
Route::get('add-bucket', [B2Controller::class, 'add_bucket'])->name('add-bucket')->middleware('auth');
Route::get('add-bucket-success', [B2Controller::class, 'add_bucket_success'])->name('add-bucket-success')->middleware('auth');

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


Route::get('show/{id}', [FileController::class, 'show_single_file'])->middleware('auth');
Route::delete('delete-file', [FileController::class, 'delete_file'])->middleware('auth');
Route::get('delete-file-success', [FileController::class, 'delete_file_success'])->middleware('auth');

// File Store
Route::get('my-files/{category?}', [FileStoreController::class, 'my_files'])->name('my-files')->middleware('auth');
Route::get('public-files/{category?}', [FileStoreController::class, 'public_files']);


// our store
//Route::get('store/upload-online-file', [OurStoreController::class, 'upload_online_file'])->middleware('auth');
//Route::get('store/upload-local-file', [OurStoreController::class, 'upload_local_file'])->middleware('auth');


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
    // abort(404);
    return view('404', ['status'=>404]);
});
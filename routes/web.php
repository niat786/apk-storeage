<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\B2Controller;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\OurStoreController;
use App\Http\Controllers\FileStoreController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DownloadController;

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

// Route::domain('blog.' . env('APP_URL'))->group(function () {
//     Route::get('/', function ($account, $id) {
//         dd('subdomain');
//     });
// });

use App\Models\User;
use App\Models\Domain;
use App\Models\B2Account;

Route::get('/set', function () {
    $domains = Domain::all();
    foreach ($domains as $domain) {
        B2Account::where('user_id', $domain->user_id)->update(['domain_id' => $domain->id]);
    }
    dd('done');
});



Route::get('/', function () {
    return view('homepage');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::get('users', [AdminController::class, 'users'])->middleware('auth')->name('users');
    Route::get('files', [AdminController::class, 'files'])->middleware('auth')->name('files');
});

Route::prefix('download')->group(function () {
    Route::get('files', [DownloadController::class, 'all_files']);
    Route::get('file-is-ready', [DownloadController::class, 'test_download_page'])->name('generate-download-link'); // signed
    Route::get('files/{user_id}/{file_name}', [DownloadController::class, 'show_file']);
    Route::get('/{user_id}/{file_name}', [DownloadController::class, 'download_file']);
});

Route::prefix('account')->middleware('auth')->group(function () {
    Route::get('manage', function () {
        return view('manage-account.domain');
    })->name('manage-account');
    Route::put('update-domain', [DomainController::class, 'update_domain']);
    Route::delete('delete-domain', [DomainController::class, 'delete_domain']);
    Route::delete('delete-bucket', [DomainController::class, 'delete_bucket']);
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
Route::post('delete-file', [FileController::class, 'delete_file'])->middleware('auth');
Route::get('delete-file-success', [FileController::class, 'delete_file_success'])->middleware('auth');

// File Store
Route::get('my-files/{category?}', [FileStoreController::class, 'my_files'])->name('my-files')->middleware('auth');
Route::get('public-files/{category?}', [FileStoreController::class, 'public_files']);


// our store
Route::get('store/upload-online-file', [OurStoreController::class, 'upload_online_file'])->middleware('auth');
Route::get('store/upload-local-file', [OurStoreController::class, 'upload_local_file'])->middleware('auth');


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

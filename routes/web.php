<?php

use App\Http\Controllers\RoomController;
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

// 開発中ログイン(管理者)
Route::get('admin_dev_login', function () {
    abort_unless(app()->environment('local'), 403);
    auth()->guard('admin')->login(App\Models\Admin::first());
    return to_route('admin.home');
})->name('admin_dev_login');

Route::get('admin_dev_login_id/{id}', function ($id) {
    abort_unless(app()->environment('local'), 403);
    auth()->guard('admin')->login(App\Models\Admin::find($id));
    return to_route('admin.home');
})->name('admin_dev_login_id');

// エラー画面テスト
Route::get('500', function () {
    \Log::error('500エラーのテスト');
    abort(500);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/top', function () {
    return view('top');
})->name('top');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/top', [RoomController::class, 'top'])->name('top');
Route::resource('rooms', RoomController::class);

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ProfileController;
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

// 開発中ログイン(ユーザー)
Route::get('user_dev_login', function () {
    abort_unless(app()->environment('local'), 403);
    auth()->guard('user')->login(App\Models\User::first());
    return to_route('user.home');
})->name('user_dev_login');

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

Route::get('/', function () {
    return view('top');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/top', function () {
    return view('top');
})->name('top');

Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// });

require __DIR__ . '/auth.php';

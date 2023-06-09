<?php


use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;


// 開発中ログイン(管理者)


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

// });


Route::get('dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Route::get('admin/top', function () {
//     return view('admin.top');
// })->name('admin.top');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/top', [RoomController::class, 'top'])->name('top');
Route::resource('rooms', RoomController::class);

Route::resource('plans', PlanController::class);

Route::resource('bookings', BookingController::class);

require __DIR__ . '/auth_admin.php';

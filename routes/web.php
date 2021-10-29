<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NguoiPhuThuocController;
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
    return view('welcome');
});


/*
 * Admin
 * */
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::resources([
        'nhan-vien' => NhanVienController::class,
        'phu-thuoc' => NguoiPhuThuocController::class
    ]);
});

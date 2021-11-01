<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
})->name('home');

Route::get('login',[AuthController::class,'index'])->name('login');
Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');
Route::post('login', [AuthController::class,'login'])->name('auth.login');
/*
 * Admin
 * */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'can:view']], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('quan-tri', [AdminController::class,'roleAndPermission'])->name('permission');
    Route::get('thay-doi-thong-tin/{id}', [AdminController::class,'edit']);
    Route::post('thay-doi-thong-tin/{id}', [AdminController::class,'update']);

    Route::get('danh-sach-quan-tri', [AdminController::class,'listAdmin'])->name('admins');
    Route::resources([
        'nhan-vien' => NhanVienController::class,
        'phu-thuoc' => NguoiPhuThuocController::class
    ]);
});

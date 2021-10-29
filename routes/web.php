<?php
use App\Http\Controllers\AdminController;
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
    Route::get('/file', [AdminController::class, 'file'])->name('admin.file');
    Route::resources([
        'account' => AccountController::class,
        'category' => CategoryController::class,
        'banner' => BannerController::class,
        'product' => ProductController::class,
        'blog' => BlogController::class,
        'order' => OrderController::class
    ]);
});

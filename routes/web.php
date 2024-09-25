<?php

use App\Http\Controllers\AdminAuthController as ControllersAdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CongregationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceAdminController;
use App\Http\Controllers\ServiceController;
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
// Route::get('/',function(){
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service-registration', [ServiceController::class, 'form'])->name('service-registration');
Route::post('/service-registration', [ServiceController::class, 'register']);
Route::get('/onlineworship', [PageController::class, 'onlineworship'])->name('onlineworship');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');






// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
// });
//admin
Route::get('/admin/login', [ControllersAdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [ControllersAdminAuthController::class, 'login']);


Route::get('/admin/register', [ControllersAdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [ControllersAdminAuthController::class, 'register'])->name('admin.register.submit');

Route::middleware('admin')->group(function() {
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Rute lain untuk manajemen jemaat, pelayanan, dll.
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
Route::resource('admin/congregation', CongregationController::class)->middleware('admin');
Route::resource('admin/services', ServiceAdminController::class)->middleware('admin');
Route::resource('admin/event', EventController::class)->middleware('admin');





require __DIR__.'/auth.php';

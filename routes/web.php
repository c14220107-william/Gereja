<?php

use App\Http\Controllers\AdminAuthController as ControllersAdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\CongregationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Form_Controller;
use App\Http\Controllers\form_penyerahan_anak_Controller;
use App\Http\Controllers\form_pernikahan_Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceAdminController;
use App\Http\Controllers\ServiceController;
use App\Models\form_penyerahan_anak;
use App\Models\form_pernikahan;
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
Route::get('/admin/tes', [PageController::class, 'tes'])->name('tes');





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

// Route::get('/admin/tes', [ControllersAdminAuthController::class, 'showLoginForm'])->name('admin.tes');
// Route::post('/admin/tes', [ControllersAdminAuthController::class, 'tes']);



Route::get('/admin/register', [ControllersAdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [ControllersAdminAuthController::class, 'register'])->name('admin.register.submit');

Route::middleware('admin')->group(function() {
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/manajemenJemaat', [form_penyerahan_anak_Controller::class, 'index'])->name('manajemenJemaat.index');


    // Rute lain untuk manajemen jemaat, pelayanan, dll.
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
Route::resource('admin/congregation', CongregationController::class)->middleware('admin');
Route::resource('admin/services', ServiceAdminController::class)->middleware('admin');
Route::resource('admin/event', EventController::class)->middleware('admin');
// Route::resource('admin/manajemenJemaat', form_penyerahan_anak_Controller::class)->middleware('admin');
// Route::resource('admin/manajemenJemaat', form_pernikahan_Controller::class)->middleware('admin');
Route::resource('admin/manajemenJemaat', Form_Controller::class)->middleware('admin');




// Route::post('/service-registration', [form_penyerahan_anak_Controller::class, 'store'])->name('form_penyerahan_anak.store');
// Route::get('/admin/manajemenJemaat', [form_penyerahan_anak_Controller::class, 'index'])->name('manajemenJemaat.index');




Route::post('/service-registration', [Form_Controller::class, 'store'])->name('Form.store');
Route::get('/admin/manajemenJemaat', [Form_Controller::class, 'index'])->name('manajemenJemaat.index');



require __DIR__.'/auth.php';

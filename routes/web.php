<?php

use App\Models\form_baptisan;
use App\Models\form_pernikahan;
use App\Http\Controllers\jemaatNew;
use App\Models\form_penyerahan_anak;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Form_Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\linkYoutubeController;
use App\Http\Controllers\CongregationController;
use App\Http\Controllers\FormBaptisanController;
use App\Http\Controllers\ServiceAdminController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\form_pernikahan_Controller;
use App\Http\Controllers\form_penyerahan_anak_Controller;
use App\Http\Controllers\AdminAuthController as ControllersAdminAuthController;
use App\Http\Controllers\PersembahanController;
use App\Models\Persembahan;

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

//home page
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service-registration', [PageController::class, 'form'])->name('service-registration');
Route::get('/onlineworship', [PageController::class, 'onlineworship'])->name('onlineworship');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::post('/service-registration', [Form_Controller::class, 'store'])->name('Form.store');
Route::post('/faq', [KritikSaranController::class, 'store'])->name('kritikSaran.store');






Route::get('/admin/login', [ControllersAdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [ControllersAdminAuthController::class, 'login']);
Route::get('/admin/register', [ControllersAdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [ControllersAdminAuthController::class, 'register'])->name('admin.register.submit');

Route::middleware('admin')->group(function () {
    //dashboard
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');


    //form1
    Route::get('/admin/manajemenJemaat/penyerahan_anak', [form_penyerahan_anak_Controller::class, 'index'])->name('manajemenJemaat.index');
    Route::get('/admin/manajemenJemaat/create1', [Form_Controller::class, 'create1'])->name('manajemenJemaat.create1');
    Route::post('admin/manajemenJemaat/create1', [Form_Controller::class, 'storefromCreate'])->name('Form1.store');
    Route::get('/admin/manajemenJemaat/edit1/{id}', [Form_Controller::class, 'edit1'])->name('form1.edit');
    Route::put('/admin/manajemenJemaat/edit1/{id}', [Form_Controller::class, 'update1'])->name('form1.update');
    Route::delete('/admin/manajemenJemaat/{id}', [Form_Controller::class, 'destroy'])->name('manajemenJemaat.destroy');





    //form2
    Route::get('/admin/manajemenJemaat/pernikahan', [form_pernikahan_Controller::class, 'index'])->name('manajemenJemaat.index2');
    Route::get('/admin/manajemenJemaat/create2', [Form_Controller::class, 'create2'])->name('manajemenJemaat.create2');
    Route::post('admin/manajemenJemaat/create2', [Form_Controller::class, 'storefromCreate2'])->name('Form2.store');
    Route::get('/admin/manajemenJemaat/edit2/{id}', [Form_Controller::class, 'edit2'])->name('form2.edit');
    Route::put('/admin/manajemenJemaat/edit2/{id}', [Form_Controller::class, 'update2'])->name('form2.update');
    Route::delete('/admin/manajemenJemaat/{id}', [Form_Controller::class, 'destroy'])->name('manajemenJemaat.destroy');

    


    //form3
    Route::get('/admin/manajemenJemaat/baptisan', [FormBaptisanController::class, 'index'])->name('manajemenJemaat.index3');
    Route::get('/admin/manajemenJemaat/create3', [Form_Controller::class, 'create3'])->name('manajemenJemaat.create3');
    Route::post('admin/manajemenJemaat/create3', [Form_Controller::class, 'storefromCreate3'])->name('Form3.store');
    Route::get('/admin/manajemenJemaat/edit3/{id}', [Form_Controller::class, 'edit3'])->name('form3.edit');
    Route::put('/admin/manajemenJemaat/edit3/{id}', [Form_Controller::class, 'update3'])->name('form3.update');
    Route::delete('/admin/manajemenJemaat/{id}', [Form_Controller::class, 'destroy'])->name('manajemenJemaat.destroy');



    //faq
    Route::get('/admin/manajemen_faq', [KritikSaranController::class, 'index'])->name('manajemen_faq.index');

    //livestreaming
    Route::get('/admin/manajemen_liveStreaming', [linkYoutubeController::class, 'index'])->name('manajemen_liveStreaming.index');
    Route::post('/admin/manajemen_liveStreaming', [linkYoutubeController::class, 'store'])->name('admin.storeYoutubeLink');

    //belum fix
    Route::get('/admin/jemaatNew', [jemaatNew::class, 'index'])->name('jemaatNew.index');


    //persembahan
    Route::get('/admin/manajemen_persembahan', [PersembahanController::class, 'index'])->name('admin.manajemen_persembahan.index');
    Route::post('/admin/manajemen_persembahan', [PersembahanController::class, 'store'])->name('admin.storePersembahan');
    Route::get('/admin/manajemenPersembahan/edit/{id}', [PersembahanController::class, 'edit'])->name('admin.manajemenPersembahan.edit');
    Route::put('/admin/manajemenPesembahan/edit/{id}', [PersembahanController::class, 'update'])->name('admin.manajemenPersembahan.update');
    Route::delete('/admin/manajemen_persembahan/{id}', [PersembahanController::class, 'destroy'])->name('admin.manajemenPersembahan.destroy');

    // Route::resource('admin/manajemenJemaat', Form_Controller::class)->middleware('admin');


   
    
});








Route::post('admin/manajemenJemaat/create1', [Form_Controller::class, 'storefromCreate'])->name('Form1.store');
Route::post('admin/manajemenJemaat/create2', [Form_Controller::class, 'storefromCreate2'])->name('Form2.store');
Route::post('admin/manajemenJemaat/create3', [Form_Controller::class, 'storefromCreate3'])->name('Form3.store');


// Route::get('/admin/manajemenJemaat', [Form_Controller::class, 'index'])->name('manajemenJemaat.index');

Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');



require __DIR__ . '/auth.php';

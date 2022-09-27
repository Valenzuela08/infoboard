<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ChangePass;
use App\Http\Controllers\ContactController;
use app\Models\User; 


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
// verified email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//return home page
Route::get('/', function () {
    return view('home');
});
//return admin dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

//logout
Route::get('/user/logout', [LogoutController::class, 'logout'])->name('user.logout');

// admin all route//////////////////////////////////////////////////////////////////////////
//slider
Route::get('/home/slider', [SliderController::class, 'Slider'])->name('home.slider');
Route::get('/add/slider', [SliderController::class, 'AddSlider'])->name('add.slider');
Route::post('/store/slider', [SliderController::class, 'StoreSlider'])->name('store.slider');
Route::get('/slider/edit/{id}', [SliderController::class, 'Edit']);
Route::put('/slider/update/{id}', [SliderController::class, 'Update']);
//change password
Route::get('/user/password', [ChangePass::class, 'ChangePass'])->name('change.password');
Route::post('/password/change', [ChangePass::class, 'UpPass'])->name('password.change');
//contact
Route::get('admin/contact', [ContactController::class, 'AdminContact'])->name('admin.contact');
Route::get('/add/contact', [ContactController::class, 'AddContact'])->name('add.contact');
Route::post('/store/contact', [ContactController::class, 'StoreContact'])->name('store.contact');

//home all route////////////////////////////////////////////////////////////////////////

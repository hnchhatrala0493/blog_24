<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/
// Auth::routes();
// Route::get( '/', );

Route::get( 'login', [HomeController::class,'showLoginForm'] )->name( 'login' );
Route::post( 'login', [HomeController::class,'login'] )->name('login_action');
Route::get( 'logout', [LoginController::class,'logout'] )->name( 'logout' );

// Registration Routes...
Route::get( 'register', [ HomeController::class, 'showRegistrationForm' ] )->name( 'register' );
Route::post( 'register', [ HomeController::class, 'register' ] )->name('registration');

// Password Reset Routes...
Route::get( 'password/reset', [ ForgotPasswordController::class, 'showLinkRequestForm' ] )->name('password.request');
Route::post( 'password/email', [ ForgotPasswordController::class, 'sendResetLinkEmail' ] )->name('password.email');
Route::get( 'password/reset/{token}', [ ResetPasswordController::class, 'showResetForm' ] );
Route::post( 'password/reset', [ ResetPasswordController::class,'reset'])->name('password.reset');

Route::get('/home',[HomeController::class,'index'] )->name('home');
Route::get('/about',[HomeController::class,'aboutus'] )->name('about');
Route::get('/contactus',[HomeController::class,'contactus'] )->name('contact');
Route::get('/gallery',[HomeController::class,'gallery'] )->name('gallery');

Route::get('/sendmail/ {
    email}
    ', function ($email) {
   $data = [
       'name' => 'Himanshu Doe',
       'email'=> $email
   ];
   Mail::to($email)->send(new SendMail($data));
   echo "Mail Sent"; 
});   



Route::resource('emplooyee',EmployeeController::class);
Route::resource('post',PostController::class);

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard' );
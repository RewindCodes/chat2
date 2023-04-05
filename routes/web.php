<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\Pages\ChatController;
use App\Http\Controllers\Pages\PagelandingController;
use App\Http\Controllers\Pages\UserDashboardController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\Subscription\SubscriptionController;
use Illuminate\Support\Facades\Auth;
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
// =============register===============//
// Route:;redirect('/','login');

Route::get('register',[UserAuthController::class,'viewregister'])->name('showregister');
Route::post('register',[UserAuthController::class,'register'])->name('register');




//==========login============//
Route::get('login',[UserAuthController::class,'viewlogin'])->name('showlogin');
Route::post('login',[UserAuthController::class,'login'])->name('login');
Route::get('logout',[UserAuthController::class,'logout'])->name('logout');

// ======================================forgot password =====================

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}',[ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


// ==========================user Auth middleware======================
Route::get('/',[PagelandingController::class,'pagelanding'])->name('home');
Route::group(['middleware'=>'UserAuthCheck'],function(){


    Route::get('plans/checkout/{plan_id}',[SubscriptionController::class,'PlanCheckout'])->name('plan.checkout');
    Route::post('plans/process',[SubscriptionController::class,'PlanProcess'])->name('plan.process');
    // ===========================user Dashboard==========================
    Route::get('userdashboard',[UserDashboardController::class,'UserDashboard'])->name('user.dashboard');
    Route::get('subcription/cancel',[UserDashboardController::class,'subcriptionCancel'])->name('subcription.cancel');
    Route::get('subcription/resume',[UserDashboardController::class,'subcriptionResume'])->name('subcription.resume');


});
// ======================subcriber middleware=======================
Route::group(['middleware'=>'Subscriber'],function(){
    Route::get('/chat',[ChatController::class,'showchat'])->name('chat');
    Route::post('/chat',[ChatController::class,'chatting'])->name('chatting');

});
// ======================================Socialite =====================
//google//
Route::get('google/redirect',[SocialiteController::class,'showGoogle'])->name('showGoogle');
Route::get('google/callback',[SocialiteController::class,'google'])->name('google');
//linkedin//
Route::get('linkedin/redirect',[SocialiteController::class,'showLinkedin'])->name('showLinkedin');
Route::get('linkedin/callback',[SocialiteController::class,'linkedin'])->name('linkedin');
// //github//
Route::get('github/redirect',[SocialiteController::class,'showGithub'])->name('showGithub');
Route::get('github/callback',[SocialiteController::class,'github'])->name('github');



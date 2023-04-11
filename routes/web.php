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


// ======================General Pages==========================
Route::get('/',[PagelandingController::class,'pagelanding'])->name('home');
Route::get('/pricing',[PagelandingController::class,'pricingPage'])->name('pricing.page');
Route::get('/about',[PagelandingController::class,'aboutPage'])->name('about.page');
Route::get('/faqs',[PagelandingController::class,'faqPage'])->name('faq.page');
Route::get('/contact',[PagelandingController::class,'contactPage'])->name('contact.page');




// ==========================user Auth middleware======================

Route::group(['middleware'=>'UserAuthCheck'],function(){
    Route::get('plans/checkout/{plan_id}',[SubscriptionController::class,'PlanCheckout'])->name('plan.checkout');
    Route::post('plans/process/{id}',[SubscriptionController::class,'PlanProcess'])->name('plan.process');
    // ===========================user Dashboard==========================
    Route::get('userdashboard',[UserDashboardController::class,'UserDashboard'])->name('user.dashboard');
    Route::get('subcription/cancel',[UserDashboardController::class,'subcriptionCancel'])->name('subcription.cancel');
    Route::get('subcription/resume',[UserDashboardController::class,'subcriptionResume'])->name('subcription.resume');

    // ======================subcriber middleware=======================
Route::group(['middleware'=>'Subscriber'],function(){
    Route::get('/chat',[ChatController::class,'showchat'])->name('chat');
    Route::post('/chat',[ChatController::class,'chatting'])->name('chatting');
    Route::get('reset',[ChatController::class,'destroy'])->name('chat.reset');
    Route::get('/messages', [ChatController::class, 'getMessages'])->name('get-messages');

});

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



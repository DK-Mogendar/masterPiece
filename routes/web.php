<?php
use \App\Http\Controllers\StartpageContoller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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
Route::get('/start',[StartpageContoller::class,'index']);

Route::prefix('admin')->group(function(){
    Route::name('admin')->group(function(){
        Route::view('test','test')->name(name:'test');
    });
    
});
Route::get('/blog/{id}', function($id) {
    $post=\App\Models\Post::first();
    return view('blog.show', compact('post'));
});


/*-------------------------------------------------------------------------*/
Route::get('/', function () {
    return view('wip');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/aboutMy', function () {
    return view('aboutMy');
});
//Bilder----------------------------------------------------------------------------------

Route::get('/images', [ImageController::class, 'index'])->name('images.index');
Route::get('/images/{id}', [ImageController::class, 'show'])->name('images.show');
Route::get('/images/upload', [ImageController::class, 'create'])->name('images.upload');
Route::post('/images', [ImageController::class, 'store'])->name('images.store');

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Authentifizierungsrouten
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Registrierungsrouten
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// E-Mail-Verifikationsrouten
Route::get('/email/verify', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.resend');

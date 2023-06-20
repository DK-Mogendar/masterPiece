<?php
use \App\Http\Controllers\StartpageContoller;
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



//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

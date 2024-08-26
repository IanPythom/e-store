<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\BlogController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('about', function () {
    return 'This is the about page';
})->name('about');

Route::get('rooms/{id}', function ($id) {
    return [
        'id' => $id,
        'name' => 'John Doe'
    ];
});

Route::group(['as' => 'animals.', 'prefix' => 'animals'], function(){
    Route::get('dog', function(){
        return 'woof';
    })->name('dog');

    Route::get('cat', function(){
        return 'meow!';
    })->name('cat');
    Route::get('monkey', function(){
        return 'Ho Ho';
    })->name('monkey');
});

Route::get('test', function() {
    return view('test');
})->name('test');

Route::get('contact', [TestController::class, 'contact'])->name('contact');

Route::resource('blog', BlogController::class)->middleware('auth.check');


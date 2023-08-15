<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\KebabController;
use App\Http\Controllers\BookController;

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
});

//the auth middleware we are using makes sure that the user has loged in before
//going to the specific route pizzas in the below line
//this is one way of protecting routes in laravel
Route::get('/pizzas' ,[PizzaController::class,'index'])->name('pizzas.index')->middleware('auth');
Route::get('/pizzas/create' ,[PizzaController::class,'create'])->name('pizzas.create');
Route::get('/pizzas/{id}' ,[PizzaController::class,'show'])->name('pizzas.show')->middleware('auth');
Route::post('/kebab',[KebabController::class,'store']);



Route::post('/pizzas',[PizzaController::class,'store'])->name('pizzas.store');
Route::delete('/pizzas/{id}' , [PizzaController::class , 'distroy'])->name('pizzas.distroy')->middleware('auth');



//let wrtie a route based on a condition
Route::get('/books/create',[BookController::class,'create'])->name('books.create');
Route::get('/books' ,[BookController::class,'index'])->name('books.index');
Route::get('books/{id}' , [BookController::class,'show'])->name('books.show');
Route::post('/books' ,[BookController::class,'store'])->name('books.store');




Auth::routes([
    // 'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//for kebab

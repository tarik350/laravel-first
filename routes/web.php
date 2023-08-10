<?php

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

Route::get('/pizzas' ,function(){
    $pizza = [
        ['type' => "south africn" , 'taste' => "chicken taste" , 'price' => 9 ],
        ['type' => 'volcano' ,"taste" => "spicey food" ,"price" => 23  ],
        ['type' => 'veg supreme' ,"taste" => "vagetable " ,"price" => 14  ]

    ];
    return view('pizzas', ['pizzas' => $pizza]);
    // return "pizzas";
    // return ["name" => "vegitable pizza", "ingredient" => "some ingredient"];
}); 
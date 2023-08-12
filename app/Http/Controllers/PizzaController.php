<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizza = [
            ['type' => "south africn" , 'taste' => "chicken taste" , 'price' => 9 ],
            ['type' => 'volcano' ,"taste" => "spicey food" ,"price" => 23  ],
            ['type' => 'veg supreme' ,"taste" => "vagetable " ,"price" => 14  ],
            ['type' => request('name') , "taste" => request('taste') , "price" => request('price')]
        ];
        return view('pizzas', ['pizzas' => $pizza]);
    }

    public function show($id){
     return view('details',['id' => $id]);
    }
}

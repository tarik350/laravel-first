<?php

namespace App\Http\Controllers;
use App\Http\Controllers\KebabController;


//laravel uses back slash instean of forward slash for path
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{

//so you can not define like you would normally do  within a method in a class
//it will result an error
    public function index(){
        //this method is built in the Model class you don't have to provide
        //the implementation in your class
        //it will fetch all the records in teh pizza table
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name','desc')->get();
        // $pizzas = Pizza::where('type','african')->get();
        // $pizza = [
        //     ['type' => "south africn" , 'taste' => "chicken taste" , 'price' => 9 ],
        //     ['type' => 'volcano' ,"taste" => "spicey food" ,"price" => 23  ],
        //     ['type' => 'veg supreme' ,"taste" => "vagetable " ,"price" => 14  ],
        //     ['type' => request('name') , "taste" => request('taste') , "price" => request('price')]
        // ];
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    //SHOW METHOD
    public function show($id){
        if(is_numeric($id)){
            $pizza = Pizza::find($id);
            // error_log($pizza->name);
            return view('pizzas.show',['pizza' => $pizza]);
        }else{
            return ['error' => "id has to be a number"];
        }
    }

    //CREATE METHOD
    public function create(){
        return view('pizzas.create');
    }

    public function store(){

        //this funcion as we discussed in the naming convention will be called when a user makes a
        //post request on the create page
        //create page is used in a page that contains a form and sends a post request
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');

        if(request('pizzaType') != 'pizza'){
            return redirect()->action([kebabController::class, 'index']);
        }

        //as we can see we are not converting teh array into a json string we are
        //directly passing the value comming from create to the data base
        //what is happening here is the special property called cast in pizza model is converting the
        //this array into json and converting it back to array when needed in hte view
        $pizza->toppings = request('toppings');
        // $pizza->toppings =json_encode(request('toppings'));




        // foreach(request('toppings') as $topping ){
        //     error_log($topping);
        // }
        // error_log(request('toppings'));
      if($pizza->name && $pizza->toppings && $pizza->type && $pizza->base){
        $pizza->save();
        return redirect('/')->with('message',"Thank you for the order");
      }else{
        return redirect()->route('create')->with('message','please provide all the information');
      }

    }
    public function distroy($id){
     //1. find the specific property wiht it id : you can do so with either findOrFail or
    //or where method.
   //  2.  delete the method with delete method.
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        // $result = Pizza::where('id',$id)->delete();
        // error_log($result);

    return redirect('/pizzas');
    }
}

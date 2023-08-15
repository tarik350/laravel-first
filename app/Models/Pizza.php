<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{

    // use HasFactory;
    // this is special property of a model it takes in a column
    // of specified type and converts it into a json string
    protected $casts = [
        'toppings' => 'array'
    ];

    public function getNameAttribute($value){
       // accessor method :  this method will be called when ever i try to access the name attribute from
       //data base and used to manipulate the value before bassing it to the view

       //this method makes the name value uppercase before returning it back to the home
       return strtoupper($value);
    }

    // this is a mutator method that converts the name value to lower case before sending it
    // to the data base it can be used to make some validation and adjustment on data before sending
    //the value to data base
    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }
}

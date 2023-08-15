@extends('layouts.app')
@section('content')

    <body>
        <div class=" flex flex-col justify-center items-center h-[80vh]">
            <h1 class="text-4xl ">Create a New Pizza</h1>
            <form class="flex flex-col justify-center items-center" action={{ route('pizzas.store') }} method="POST">
                {{-- this directive allows to get rid of cross site scripting threat and avoids the 419 page  --}}
                @csrf
                <div class="container">
                    <label class="lable" for="name">Your name:</label class="lable">
                    <input class="px-12  py-2 border-2" type="text" name="name" id="name" required>
                </div>
                <div class="container">
                    <label class="lable" for="type">Choose type of pizza:</label class="lable">
                    <select class="select" name="type" id="type">
                        <option value="margarita">Margarita</option>
                        <option value="hawaiian">Hawaiian</option>
                        <option value="veg supreme">Veg Supreme</option>
                        <option value="volcano">Volcano</option>
                    </select>
                </div>
                <div class="container">
                    <label class="lable" for="base">Choose crust:</label class="lable">
                    <select class="select" name="base" id="base">
                        <option value="thick">Thick</option>
                        <option value="thin & crispy">Thin & Crispy</option>
                        <option value="cheese crust">Cheese Crust</option>
                        <option value="garlic crust">Garlic Crust</option>
                    </select>

                </div>
                <div class="">
                    <fieldset class="flex justify-between">
                        <label class="lable">Extra toppings:</label>
                        <div>
                            {{-- the square bracket in toppings[] tell larvel to expect
                                an array of value instead of a single value of we choose
                                to make the array a single value for example toppings then it will
                                only take the last one we selected from all the selected checkboxes --}}
                            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
                            <input type="checkbox" name="toppings[]" value="peppers">Peppers<br />
                            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
                            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
                        </div>
                    </fieldset>
                    <h2>choose a pizza type</h2>
                    <input type="radio" id="html" name="pizzaType" value="kebab">
                    <label for="html">kebab</label><br>
                    <input type="radio" id="css" name="pizzaType" value="pizza">
                    <label for="css">pizza</label><br>

                </div>
                @if (Session::has('message'))
                    <p>{{ session('message') }}</p>
                @endif

                <input class="border-2 bg-black text-white px-8 py-2 rounded-xl self-end" type="submit"
                    value="Order Pizza">
            </form>
        </div>
    </body>
@endsection

@extends('layouts.app')
@section('content')
    <div class="first-line:flex flex-col items-center text-2xl mt-12">
        <h1 class=" uppercase text-[100px] font-extralight my-24 text-center">pizza list</h1>
        @foreach ($pizzas as $pizza)
            <div class="text-2xl font-bold text-center">
                {{ $pizza['name'] }} : {{ $pizza['base'] }} : {{ $pizza['type'] }}
            </div>
        @endforeach

    </div>
@endsection

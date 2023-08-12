@extends('layout.layout')
@section('content')
    <div class="first-line:flex flex-col items-center text-2xl mt-12">
        <h1 class=" uppercase text-[100px] font-extralight my-24 text-center">pizza list</h1>
        @foreach ($pizzas as $pizza)
            @if ($pizza['taste'] && $pizza['type'] && $pizza['price'])
                <div class="flex justify-center">
                    @if ($pizza['price'] < 10)
                        <p class="text-green-400 ">this pizza is cheap :
                        @elseif ($pizza['price'] > 15)
                        <p class="text-red-800">this pizza is expensive : </p>
                    @else
                        <p class=" text-teal-800 inline"> this pizza is normally priced : </p>
                    @endif
                    <p class=" px-12"> {{ $pizza['type'] }} : {{ $pizza['taste'] }} : {{ $pizza['price'] }}</p>
                </div>
            @endif
        @endforeach

    </div>
@endsection

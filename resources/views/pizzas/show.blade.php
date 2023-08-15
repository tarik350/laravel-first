@extends('layouts.app')
@section('content')
    <div class="flex flex-col items-center justify-center ">
        <h1 class="uppercase text-4xl font-bold  ">pizza detail</h1>

        @if ($pizza != null)
            <p class="  font-bold">
                {{ $pizza->name }} : {{ $pizza['type'] }} : {{ $pizza['base'] }}
            </p>
            <ul class="list-disc">
                @foreach ($pizza->toppings as $topping)
                    <li> {{ $topping }} </li>
                @endforeach
            </ul>
            <form action={{ route('pizzas.show', $pizza->id) }} method="POST">
                @csrf
                @method('DELETE')
                <button class=" my-12 border-2 bg-blue-800 px-10 py-2 rounded-2xl text-white">
                    complete order
                </button>
            </form>
        @else
            <p>no record with that id</p>
        @endif
    </div>
    <a href="/pizzas" class="flex justify-center items-center text-blue-400 underline">back to all pizzas</a>
@endsection

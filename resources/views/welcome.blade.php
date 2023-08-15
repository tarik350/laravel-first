@extends('layouts.app')
@section('content')
    <div class="flex justify-center items-center flex-col">
        <p class="text-4xl text-center mt-20 uppercase text-teal-900 font-extralight">
            Welcome to the <span class="block"> pizza house page</span>
        </P>
        <p class="text-4xl text-center mt-20 uppercase text-teal-900 font-extralight">{{ session('message') }}</p>

        {{-- i will add some buttons here --}}
        <a class="text-4xl text-center mt-20 uppercase text-teal-900 font-extralight" href={{ route('pizzas.create') }}>order
            a
            pizza</a>
    </div>
@endsection

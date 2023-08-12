@extends('layout.layout')
@section('content')
    <div class="flex flex-col items-center justify-center ">
        <h1 class="uppercase text-4xl font-bold  ">pizza detail</h1>
        <p class=" uppercase font-bold">
            pizza id : {{ $id }}
        </p>
    </div>
@endsection

@extends('layouts.app')
@section('content')

    <body>
        <div class=" flex flex-col justify-center items-center h-[80vh]">
            <h1 class="text-4xl ">Create a New Pizza</h1>
            <form class="flex flex-col justify-center items-center" action={{ route('books.store') }} method="POST">
                {{-- this directive allows to get rid of cross site scripting threat and avoids the 419 page  --}}
                @csrf
                <div class="container">
                    <label class="lable" for="name">book name:</label class="lable">
                    <input class="px-12  py-2 border-2" type="text" name="name" id="name" required>
                </div>
                <div class="container">
                    <label class="lable" for="author">author:</label class="lable">
                    <input class="px-12  py-2 border-2" type="text" name="author" id="author" required>
                </div>

                @if (Session::has('message'))
                    <p>{{ session('message') }}</p>
                @endif

                <input class="border-2 bg-black text-white px-8 py-2 rounded-xl self-end" type="submit" value="add Book">
            </form>
        </div>
    </body>
@endsection

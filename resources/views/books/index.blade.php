@extends('layouts.app')
@section('content')
    <div class="first-line:flex flex-col items-center text-2xl mt-12">
        <h1 class=" uppercase text-[100px] font-extralight my-24 text-center">book list</h1>
        @foreach ($books as $book)
            <div class="text-2xl font-bold text-center">
                @if ($book != null)
                    {{ $book['name'] }} : {{ $book['author'] }}
                @else
                    no books to show
                @endif

            </div>
        @endforeach
        <a href="/books/create">
            add book
        </a>
    </div>
@endsection

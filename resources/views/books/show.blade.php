@extends('layouts.app')
@section('content')
    <div class="center text-center font-bold">
        @if ($book)
            {{ $book->name }} : {{ $book->author }}
        @endif
    </div>
@endsection

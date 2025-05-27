@extends('layout')

@section('content')
<div class="card shadow-sm p-4">
    <h1 class="mb-4">{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>ISBN:</strong> {{ $book->isbn }}</p>
    <p><strong>Stock:</strong> {{ $book->stock }}</p>
    <p><strong>Price:</strong> ${{ $book->price }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Back to List</a>
</div>
@endsection

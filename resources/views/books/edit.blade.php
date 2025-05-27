@extends('layout')

@section('content')
    <h1 class="mb-4 text-warning">✏️ Edit Book</h1>

    <form action="{{ route('books.update', $book) }}" method="POST" class="g-3">
        @csrf
        @method('PUT')

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Title</label>
            <input type="text" name="title" class="form-control border-primary mt-0" value="{{ old('title', $book->title) }}">
            @error('title') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Author</label>
            <input type="text" name="author" class="form-control border-primary mt-0" value="{{ old('author', $book->author) }}">
            @error('author') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">ISBN</label>
            <input type="text" name="isbn" class="form-control border-primary mt-0" value="{{ old('isbn', $book->isbn) }}">
            @error('isbn') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Stock</label>
            <input type="number" name="stock" class="form-control border-primary mt-0" value="{{ old('stock', $book->stock) }}">
            @error('stock') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Price</label>
            <input type="number" step="0.01" name="price" class="form-control border-primary mt-0" value="{{ old('price', $book->price) }}">
            @error('price') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-outline-warning me-2">💾 Update</button>
            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">↩️ Back</a>
        </div>
    </form>
@endsection

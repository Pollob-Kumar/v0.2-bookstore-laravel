@extends('layout')

@section('content')
    <h1 class="mb-4 text-success">📘 Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST" class="g-3">
        @csrf

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Title</label>
            <input type="text" name="title" class="form-control border-primary mt-0" placeholder="Enter book title" value="{{ old('title') }}">
            @error('title') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Author</label>
            <input type="text" name="author" class="form-control border-primary mt-0" placeholder="Enter author name" value="{{ old('author') }}">
            @error('author') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">ISBN</label>
            <input type="text" name="isbn" class="form-control border-primary mt-0" placeholder="Enter ISBN number" value="{{ old('isbn') }}">
            @error('isbn') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Stock</label>
            <input type="number" name="stock" class="form-control border-primary mt-0" placeholder="Enter stock quantity" value="{{ old('stock') }}">
            @error('stock') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12 mb-3">
            <label class="form-label fw-semibold text-primary mb-1">Price</label>
            <input type="number" step="0.01" name="price" class="form-control border-primary mt-0" placeholder="Enter price" value="{{ old('price') }}">
            @error('price') <p class="text-danger mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-outline-success me-2">✅ Submit</button>
            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">↩️ Back</a>
        </div>
    </form>
@endsection

{{-- filepath: c:\Users\samiu\Herd\book-store\resources\views\books\index.blade.php --}}
@extends('layout')

@section('content')
    <h1 class="mb-4 text-primary">📚 Bookstore</h1>

    <div class="d-flex justify-content-between mb-3">
        <form class="d-flex" method="GET" action="{{ route('books.index') }}">
            <input class="form-control me-2 border-primary" type="search" placeholder="Search books" name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-primary" type="submit">🔍 Search</button>
        </form>
        <a href="{{ route('books.create') }}" class="btn btn-success">➕ New Book</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-hover border border-secondary rounded">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td>  Eta 1 diye shuru hoy ebong prottek iteration-e 1 kore barte thake-->
                    <td>{{ ($books->currentPage() - 1) * $books->perPage() + $loop->iteration }}</td>
                    <td class="text-primary fw-bold">{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td class="text-muted">{{ $book->isbn }}</td>
                    <td><span class="badge bg-info text-dark">${{ number_format($book->price, 2) }}</span></td>
                    <td>
    <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-outline-info">Details</a>
    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-outline-warning">Update</a>
    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline"
          onsubmit="return confirm('Are you sure you want to delete this book?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
    </form>
</td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-center mt-4">
        {{ $books->links('pagination::bootstrap-5') }}
    </div>
@endsection

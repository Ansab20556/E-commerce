@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Products</h2>
        <a href="{{ route('products.create') }}" class="btn btn-success">Add Product</a>
    </div>

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/img-7.png') }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 80) }}</p>
                        <p class="mt-auto"><strong>{{ number_format($product->price, 2) }} USD</strong></p>
                        <div class="mt-2">
                            <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-primary">View</a>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Delete this product?');">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No products yet.</p>
        @endforelse
    </div>

    <div class="mt-3">
        {{ $products->links() }}
    </div>
</div>
@endsection

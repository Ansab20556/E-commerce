@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/img-7.png') }}" class="img-fluid" alt="{{ $product->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $product->name }}</h3>
                    <p class="card-text">{{ $product->description }}</p>
                    <p><strong>Price:</strong> {{ number_format($product->price, 2) }} USD</p>
                    <p><strong>Stock:</strong> {{ $product->stock }}</p>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-secondary">Edit</a>
                    <a href="{{ route('products.index') }}" class="btn btn-link">Back to list</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

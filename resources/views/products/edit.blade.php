@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container mt-4">
    <h2>Edit Product</h2>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('products._form')
    </form>
</div>
@endsection

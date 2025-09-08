@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="container mt-4">
    <h2>Create Product</h2>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @include('products._form')
    </form>
</div>
@endsection

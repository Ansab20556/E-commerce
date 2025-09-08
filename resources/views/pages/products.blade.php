@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="product_section layout_padding mt-4">
    <div class="container">
        {{-- رسالة نجاح --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h1 class="feature_taital">FEATURED PRODUCTS</h1>
        <p class="feature_text">Here you can manage all products (Add, Edit, Delete, View)</p>

        {{-- زر إضافة منتج --}}
        <div class="mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-success">+ Add Product</a>
        </div>

        <div class="product_section_2">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-sm-4 mb-4">
                        <div class="card h-100">
                            {{-- صورة المنتج --}}
                            <img src="{{ $product->image ? asset('storage/'.$product->image) : asset('images/img-7.png') }}"
                                 class="card-img-top image_7"
                                 alt="{{ $product->name }}">

                            <div class="card-body d-flex flex-column">
                                {{-- اسم المنتج --}}
                                <h5 class="card-title">{{ $product->name }}</h5>

                                {{-- وصف قصير --}}
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($product->description, 80) }}</p>

                                {{-- السعر --}}
                                <p><strong>${{ number_format($product->price, 2) }}</strong></p>

                                {{-- أزرار التحكم --}}
                                <div class="mt-auto">
                                    <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-primary">View</a>
                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                          class="d-inline"
                                          onsubmit="return confirm('Are you sure to delete this product?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No products available. <a href="{{ route('products.create') }}">Add one now</a>.</p>
                @endforelse
            </div>
        </div>

        {{-- روابط التنقل بين الصفحات --}}
        <div class="mt-3">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection

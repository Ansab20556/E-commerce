@extends('layouts.app')

@section('title', 'Products')

@section('content')
<div class="product_section layout_padding mt-4">
    <div class="container">
        <h1 class="feature_taital">FEATURED PRODUCTS</h1>
        <p class="feature_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking</p>
        <div class="product_section_2">
            <div class="row">
                <div class="col-sm-5">
                    <div class="feature_box">
                        <h1 class="readable_text">Readable content of</h1>
                        <div><img src="{{ asset('images/img-7.png') }}" class="image_7"></div>
                    </div>
                    <div class="feature_box_1 mt-4">
                        <h1 class="readable_text">Readable content of</h1>
                        <div><img src="{{ asset('images/img-7.png') }}" class="image_7"></div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="feature_box_2">
                        <h1 class="readable_text">Readable content of</h1>
                        <div><img src="{{ asset('images/img-8.png') }}" class="image_8"></div>
                        <div class="seemore_bt mt-3"><a href="#">see More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

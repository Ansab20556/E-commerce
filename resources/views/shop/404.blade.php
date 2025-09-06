
@extends('layouts.app')

@section('title', 'Page Not Found')

@section('content')
<div class="container-fluid py-5 bg-light text-center">
    <h1 class="display-1 text-danger">404</h1>
    <h2 class="mb-4">Page Not Found</h2>
    <p class="mb-4">We’re sorry, the page you requested could not be found. Please go back to the homepage.</p>
    <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ url('/') }}">Go Back To Home</a>
</div>
@endsection

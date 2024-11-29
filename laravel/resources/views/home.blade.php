@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">TOKO BANGUNAN AHYONG!</h1>
        <p class="lead text-center">Browse our wide range of products and enjoy great deals.</p>

        <div class="text-center">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Browse Products</a>
        </div>
    </div>
@endsection

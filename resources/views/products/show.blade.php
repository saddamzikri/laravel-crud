@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Product Details</h1>

    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Price: ${{ $product->price }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><strong>Stock:</strong> {{ $product->stock }}</p>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>
@endsection

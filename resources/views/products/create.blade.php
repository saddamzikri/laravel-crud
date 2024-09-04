@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Product</h1>

    <!-- Menampilkan Pesan Error jika Validasi Gagal -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Include Partial Form -->
    <form action="{{ route('products.store') }}" method="POST">
        @include('products.partials.form')
    </form>
</div>
@endsection

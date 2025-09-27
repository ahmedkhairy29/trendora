@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h3 class="card-title mb-4">Welcome, {{ auth()->user()->name }}</h3>
        <p class="lead">This is your admin dashboard. You can manage categories and products from the sidebar.</p>

        <div class="row text-center mt-4">
            <div class="col-md-6 mb-3">
                <div class="card border-primary shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Categories</h5>
                        <h3 class="fw-bold">{{ $categoriesCount }}</h3>
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm">Manage</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card border-success shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-success">Products</h5>
                        <h3 class="fw-bold">{{ $productsCount }}</h3>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-success btn-sm">Manage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

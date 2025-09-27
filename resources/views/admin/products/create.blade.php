@extends('layouts.admin')
@section('content')
<div class="container">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-2">
            <label>Name</label>
            <input name="name" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Category</label>
            <select name="category_id" class="form-control">
                <option value="">-- None --</option>
                @foreach($categories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-2">
            <label>Price</label>
            <input name="price" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Stock</label>
            <input name="stock" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-check mb-2">
            <input type="checkbox" name="is_active" class="form-check-input" id="is_active">
            <label class="form-check-label" for="is_active">Active</label>
        </div>

        <button class="btn btn-success">Save</button>
    </form>
</div>
@endsection

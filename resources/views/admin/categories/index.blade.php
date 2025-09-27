@extends('layouts.admin')

@section('content')
<div class="container">
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary mb-3">Add Category</a>
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div>@endif
    <table class="table">
        <thead><tr><th>#</th><th>Name</th><th>Slug</th><th>Actions</th></tr></thead>
        <tbody>
        @foreach($categories as $cat)
            <tr>
                <td>{{ $cat->id }}</td>
                <td>{{ $cat->name }}</td>
                <td>{{ $cat->slug }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', $cat) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $cat) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
</div>
@endsection

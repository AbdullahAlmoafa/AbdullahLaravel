@extends('layouts.app')

@section('content')

<h1 class="h3 mb-3">Add New Product</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
<<<<<<< HEAD
            <div class="card-body">
                @if ($errors->any())
=======
            <div class="card-header"><h5 class="card-title mb-0">Enter product details</h5></div>
            <div class="card-body">
                 @if ($errors->any())
>>>>>>> d2bba448b39fb54a7649c576338c7fed24d6c898
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
<<<<<<< HEAD

                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" data-prevent-double-submit="true">
                    @csrf
                    {{-- Category Dropdown --}}
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Name --}}
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>

                    {{-- Price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>

                    {{-- Quantity --}}
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                    </div>

                    {{-- Description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    </div>

                    {{-- Image Upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input class="form-control" type="file" id="image" name="image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save Product</button>
=======
                <form action="{{ route('products.store') }}" method="POST" id="create-product-form" data-prevent-double-submit="true">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter product name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Enter price" value="{{ old('price') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description">{{ old('description') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="save-button">Save Product</button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
>>>>>>> d2bba448b39fb54a7649c576338c7fed24d6c898
                </form>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
=======



>>>>>>> d2bba448b39fb54a7649c576338c7fed24d6c898
@endsection
@extends('layouts.app')

@section('content')

<h1 class="h3 mb-3">Edit Product</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
<<<<<<< HEAD
            <div class="card-body">
                @if ($errors->any())
=======
            <div class="card-header"><h5 class="card-title mb-0">Update product details</h5></div>
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

                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data" data-prevent-double-submit="true">
                    @csrf
                    @method('PUT')

                    {{-- Category Dropdown --}}
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-control" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Name, Price, Quantity --}}
                    <div class="mb-3"><label for="name" class="form-label">Product Name</label><input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}"></div>
                    <div class="mb-3"><label for="price" class="form-label">Price</label><input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}"></div>
                    <div class="mb-3"><label for="quantity" class="form-label">Quantity</label><input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}"></div>
                    <div class="mb-3"><label for="description" class="form-label">Description</label><textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea></div>

                    {{-- Image Upload --}}
                    <div class="mb-3">
                        <label for="image" class="form-label">New Product Image (Optional)</label>
                        <input class="form-control" type="file" id="image" name="image">
                        @if ($product->image)
                            <div class="mt-2">
                                <p>Current Image:</p>
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                            </div>
                        @endif
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update Product</button>
=======
                <form action="{{ route('products.update', $product->id) }}" method="POST" id="edit-product-form" data-prevent-double-submit="true">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="update-button">Update Product</button>
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
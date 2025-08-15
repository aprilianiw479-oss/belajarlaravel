@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Add New Products</h3>
        <a href="{{ route('products.index') }}" class="my-3">Back</a>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="supplier_id" class="form-label">Supplier ID</label>
                            <input type="text"  name="supplier_id" id="supplier_id" class="form-control" />

                            @error('supplier_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text"  name="name" id="name" class="form-control" />

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="images" class="form-label">Images</label>
                            <input type="file"  name="images" id="images" class="form-control" />

                            @error('images')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="text"  name="stock" id="stock" class="form-control" min="0" />

                            @error('stock')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text"  name="unit" id="unit" class="form-control" />

                            @error('unit')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text"  name="price" id="price" class="form-control" />

                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="discount" class="form-label">Discount</label>
                            <input type="text"  name="discount" id="discount" class="form-control" />

                            @error('discount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea  id="description" name="description" rows="10" class="form-control"></textarea>

                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
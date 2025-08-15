@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Add New Articles</h3>
        <a href="{{ route('products.index') }}" class="my-3">Back</a>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <form action="{{ route('articles.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text"  name="title" id="title" class="form-control" />

                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text"  name="slug" id="slug" class="form-control" />

                            @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea  id="content" name="content" rows="10" class="form-control"></textarea>

                            @error('content')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="author" class="form-label">Author</label>
                            <input type="text"  name="author" id="author" class="form-control" />

                            @error('author')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                            <option value="">Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                            </select>

                            @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="flex">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('articles.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
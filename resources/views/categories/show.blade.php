@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Detail Category</h3>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th width="25%">ID</th>
                    <th width="10px">:</th>
                    <td>{{$category->id}}</td>
                </tr>

                <tr>
                    <th width="25%">Name</th>
                    <th width="10px">:</th>
                    <td>{{$category->name}}</td>
                </tr>

                <tr>
                    <th width="25%">Slug</th>
                    <th width="10px">:</th>
                    <td>{{$category->slug}}</td>
                </tr>

                <tr>
                    <th width="25%">Description</th>
                    <th width="10px">:</th>
                    <td>{{$category->description}}</td>
                </tr>

                <tr>
                    <th width="25%">Created At</th>
                    <th width="10px">:</th>
                    <td>{{\Carbon\Carbon::parse($category->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('category.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('category.edit', $category->id) }}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
@endsection
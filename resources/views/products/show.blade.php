@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Show Products</h3>

        <table class="table table-striped">
            <tr>
                <td colspan="2">
                    <img src="{{ asset('storage/images/' .$products->images) }}" width="300">
                </td>
            </tr>
            <tbody>
                <tr>
                    <th width="25%">No</th>
                    <th width="10px">:</th>
                    <td>{{$products->id}}</td>
                </tr>

                <tr>
                    <th width="25%">Supplier ID</th>
                    <th width="10px">:</th>
                    <td>{{$products->supplier_id}}</td>
                </tr>

                <tr>
                    <th width="25%">Name</th>
                    <th width="10px">:</th>
                    <td>{{$products->name}}</td>
                </tr>

                <tr>
                    <th width="25%">images</th>
                    <th width="10px">:</th>
                    <td>{{$products->images}}</td>
                </tr>

                <tr>
                    <th width="25%">Stock</th>
                    <th width="10px">:</th>
                    <td>{{$products->stock}}</td>
                </tr>

                <tr>
                    <th width="25%">Unit</th>
                    <th width="10px">:</th>
                    <td>{{$products->unit}}</td>
                </tr>

                <tr>
                    <th width="25%">Price</th>
                    <th width="10px">:</th>
                    <td>{{$products->price}}</td>
                </tr>

                <tr>
                    <th width="25%">Discount</th>
                    <th width="10px">:</th>
                    <td>{{$products->discount}}</td>
                </tr>

                <tr>
                    <th width="25%">Description</th>
                    <th width="10px">:</th>
                    <td>{{$products->description}}</td>
                </tr>

                <tr>
                    <th width="25%">Created At</th>
                    <th width="10px">:</th>
                    <td>{{\Carbon\Carbon::parse($products->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
                </tr>

                <tr>
                    <th width="25%">Updated At</th>
                    <th width="10px">:</th>
                    <td>{{\Carbon\Carbon::parse($products->updated_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('products.edit', $products->id) }}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
@endsection
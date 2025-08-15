@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Orders</h3>
        <a href="{{ route('orders.create') }}" class="btn btn-primary my-3">Add New</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Customer ID</th>
                    <th>tax</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($orders->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Orders is Empty</td>
                    </tr>
                @endif

                @foreach ($orders as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->customer_id }}</td>
                        <td>{{ $item->tax }}</td>

                        <td>
                            <a href="{{ route('orders.show', $item->id) }}" class="btn btn-sm btn-secondary">Show</a>
                            <a href="{{ route('orders.edit', $item->id) }}" class="btn btn-sm btn-primary">edit</a>
                            <a href="javascript:;" onclick="handleDelete('{{ $item->id }}')" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
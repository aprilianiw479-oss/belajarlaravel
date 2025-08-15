@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Show Customers</h3>
        <a href="{{ route('customers.index') }}" class="btn btn-primary my-3">Back</a>

        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">Nama</th>
                <th width="10px">:</th>
                <td>{{ $customers->name }}</td>
            </tr>

            <tr>
                <th width="25%">Address</th>
                <th width="10px">:</th>
                <td>{{ $customers->address }}</td>
            </tr>

            <tr>
                <th width="25%">Province</th>
                <th width="10px">:</th>
                <td>{{ $customers->province }}</td>
            </tr>

            <tr>
                <th width="25%">City</th>
                <th width="10px">:</th>
                <td>{{ $customers->city }}</td>
            </tr>

            <tr>
                <th width="25%">Phone</th>
                <th width="10px">:</th>
                <td>{{ $customers->phone }}</td>
            </tr>

            <tr>
                <th width="25%">Email</th>
                <th width="10px">:</th>
                <td>{{ $customers->email }}</td>
            </tr>

            <tr>
                <th width="25%">Created At</th>
                <th width="10px">:</th>
                <td>{{\Carbon\Carbon::parse($customers->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
            </tr>

            <tr>
                <th width="25%">Updated At</th>
                <th width="10px">:</th>
                <td>{{\Carbon\Carbon::parse($customers->updated_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
            </tr>
        </table>

        <div class="mt-3">
            <a href="{{ route('customers.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('customers.edit', $customers->id) }}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
@endsection
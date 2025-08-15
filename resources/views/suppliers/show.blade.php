@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Show Suppliers</h3>

        <table class="table table-bordered table-striped">
            <tr>
                <th width="25%">Name</th>
                <th width="10px">:</th>
                <td>{{ $suppliers->name }}</td>
            </tr>

            <tr>
                <th width="25%">Address</th>
                <th width="10px">:</th>
                <td>{{ $suppliers->address }}</td>
            </tr>

            <tr>
                <th width="25%">Province</th>
                <th width="10px">:</th>
                <td>{{ $suppliers->province }}</td>
            </tr>

            <tr>
                <th width="25%">City</th>
                <th width="10px">:</th>
                <td>{{ $suppliers->city }}</td>
            </tr>

            <tr>
                <th width="25%">Postcode</th>
                <th width="10px">:</th>
                <td>{{ $suppliers->postcode }}</td>
            </tr>

            <tr>
                <th width="25%">Phone</th>
                <th width="10px">:</th>
                <td>{{ $suppliers->phone }}</td>
            </tr>

            <tr>
                <th width="25%">Fax</th>
                <th width="10px">:</th>
                <td>{{ $suppliers->fax }}</td>
            </tr>

            <tr>
                <th width="25%">Created At</th>
                <th width="10px">:</th>
                <td>{{\Carbon\Carbon::parse($suppliers->created_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
            </tr>

            <tr>
                <th width="25%">Update At</th>
                <th width="10px">:</th>
                <td>{{\Carbon\Carbon::parse($suppliers->update_at)->isoFormat('DD/MM/Y HH:mm')}}</td>
            </tr>
        </table>

        <div class="mt-3">
            <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Back</a>
            <a href="{{ route('suppliers.edit', $suppliers->id) }}" class="btn btn-secondary">Edit</a>
        </div>
    </div>
@endsection
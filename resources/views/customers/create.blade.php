@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Add Customers</h3>
        <a href="{{ route('customers.index') }}" class="btn btn-primary btn my-3">Back</a>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf

                        <div class="form-group b-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control"></textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group b-3">
                            <label for="province">Province</label>
                            <input type="text" name="province" id="province" class="form-control" />
                            @error('province')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group b-3">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" class="form-control" />
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group b-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" />
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group b-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
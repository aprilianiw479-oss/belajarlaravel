@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Suppliers</h3>
        <a href="{{  route('suppliers.index') }}" class="my-3">Back</a>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{  route('suppliers.update', $suppliers->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" value="{{ $suppliers->name }}" class="form-control" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="addres">Address</label>
                            <textarea name="address" id="address" value="{{ $suppliers->address }}" class="form-control"></textarea>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="province">Province</label>
                            <input type="text" name="province" id="province" value="{{ $suppliers->province }}" class="form-control" />
                            @error('province')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="city">City</label>
                            <input type="text" name="city" id="city" value="{{ $suppliers->city }}" class="form-control" />
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="postcode">Postcode</label>
                            <input type="text" name="postcode" id="postcode" value="{{ $suppliers->postcode }}" class="form-control" />
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ $suppliers->phone }}" class="form-control" />
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="fax">Fax</label>
                            <input type="text" name="fax" id="fax" value="{{ $suppliers->fax }}" class="form-control" />
                            @error('fax')
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
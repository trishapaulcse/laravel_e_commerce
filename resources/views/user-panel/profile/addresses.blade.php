@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>My Addresses</h2>
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAddressModal">Add Address</button>
    
    <div class="row">
        @foreach($addresses as $address)
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>{{ $address->address_line1 }}</p>
                    <p>{{ $address->city }}, {{ $address->postal_code }}</p>
                    <form action="{{ route('user.addresses.destroy', $address->id) }}" method="POST">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="modal fade" id="addAddressModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('user.addresses.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5>Add Address</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Address Line 1</label>
                            <input type="text" name="address_line1" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Postal Code</label>
                            <input type="text" name="postal_code" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

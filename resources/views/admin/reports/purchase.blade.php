@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Purchase Report</h2>
    <form method="GET" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="date" name="from_date" class="form-control" value="{{ request('from_date') }}">
            </div>
            <div class="col-md-3">
                <input type="date" name="to_date" class="form-control" value="{{ request('to_date') }}">
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Revenue</h5>
                    <h3>{{ number_format($totalRevenue, 2) }} BDT</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Total Orders</h5>
                    <h3>{{ $totalOrders }}</h3>
                </div>
            </div>
        </div>
    </div>

    <h4>Top 10 Products</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Total Sold</th>
                <th>Revenue</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topProducts as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>{{ $product->total_sold }}</td>
                <td>{{ number_format($product->revenue, 2) }} BDT</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

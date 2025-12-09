@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>My Wallet</h2>
    <div class="card mb-4">
        <div class="card-body">
            <h3>Balance: {{ $wallet->balance }} BDT</h3>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFundsModal">Add Funds</button>
        </div>
    </div>

    <h4>Transaction History</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Type</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
            <tr>
                <td>{{ $transaction->type }}</td>
                <td>{{ $transaction->amount }} BDT</td>
                <td>{{ $transaction->description }}</td>
                <td>{{ $transaction->created_at->format('d M Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $transactions->links() }}

    <div class="modal fade" id="addFundsModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('user.wallet.addFunds') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5>Add Funds</h5>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control" min="1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

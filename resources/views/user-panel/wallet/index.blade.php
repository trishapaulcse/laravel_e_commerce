@extends('user-panel.layouts.app')
@section('title', 'My Wallet')
@section('content')
<h1 class="text-3xl font-bold text-gray-800 mb-6"><i class="fas fa-wallet mr-2 text-green-600"></i>My Wallet</h1>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <div class="lg:col-span-2 bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-8 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-green-100 text-sm mb-2">Available Balance</p>
                <h2 class="text-5xl font-bold">৳{{ number_format($wallet->balance ?? 0, 2) }}</h2>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-6">
                <i class="fas fa-wallet text-5xl"></i>
            </div>
        </div>
        <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="mt-6 bg-white text-green-600 px-6 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-plus mr-2"></i>Add Funds</button>
    </div>
    
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4">Quick Stats</h3>
        <div class="space-y-4">
            <div class="flex justify-between items-center">
                <span class="text-gray-600">Total Transactions</span>
                <span class="font-bold text-gray-800">{{ $transactions->total() }}</span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-600">This Month</span>
                <span class="font-bold text-green-600">+৳{{ number_format(0, 2) }}</span>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-4">
        <h2 class="text-xl font-bold"><i class="fas fa-history mr-2"></i>Transaction History</h2>
    </div>
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-exchange-alt mr-2"></i>Type</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-dollar-sign mr-2"></i>Amount</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-comment mr-2"></i>Description</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-calendar mr-2"></i>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($transactions as $transaction)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $transaction->type == 'credit' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                        <i class="fas fa-{{ $transaction->type == 'credit' ? 'arrow-down' : 'arrow-up' }} mr-1"></i>{{ ucfirst($transaction->type) }}
                    </span>
                </td>
                <td class="p-4">
                    <span class="font-bold {{ $transaction->type == 'credit' ? 'text-green-600' : 'text-red-600' }}">
                        {{ $transaction->type == 'credit' ? '+' : '-' }}৳{{ number_format($transaction->amount, 2) }}
                    </span>
                </td>
                <td class="p-4"><span class="text-gray-700">{{ $transaction->description }}</span></td>
                <td class="p-4"><span class="text-sm text-gray-500">{{ $transaction->created_at->format('d M Y, h:i A') }}</span></td>
            </tr>
            @empty
            <tr><td colspan="4" class="p-12 text-center text-gray-500"><i class="fas fa-receipt text-6xl mb-4 block text-gray-300"></i><p class="text-lg">No transactions yet</p></td></tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-6">{{ $transactions->links() }}</div>

<div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md w-full mx-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800"><i class="fas fa-plus-circle mr-2"></i>Add Funds</h2>
            <button onclick="document.getElementById('addModal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700"><i class="fas fa-times text-2xl"></i></button>
        </div>
        <form action="{{ route('user.wallet.addFunds') }}" method="POST">
            @csrf
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Amount (৳)</label>
                <input type="number" name="amount" min="1" step="0.01" class="w-full border border-gray-300 rounded-lg px-4 py-3 text-2xl focus:ring-2 focus:ring-green-500" placeholder="0.00" required>
            </div>
            <div class="grid grid-cols-3 gap-2 mb-6">
                <button type="button" onclick="document.querySelector('input[name=amount]').value=500" class="bg-gray-100 hover:bg-gray-200 py-2 rounded-lg font-semibold">৳500</button>
                <button type="button" onclick="document.querySelector('input[name=amount]').value=1000" class="bg-gray-100 hover:bg-gray-200 py-2 rounded-lg font-semibold">৳1000</button>
                <button type="button" onclick="document.querySelector('input[name=amount]').value=5000" class="bg-gray-100 hover:bg-gray-200 py-2 rounded-lg font-semibold">৳5000</button>
            </div>
            <div class="flex gap-3">
                <button type="submit" class="flex-1 bg-gradient-to-r from-green-600 to-green-700 text-white py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-check mr-2"></i>Add Funds</button>
                <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="px-6 bg-gray-500 text-white py-3 rounded-lg hover:bg-gray-600 transition font-semibold">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection

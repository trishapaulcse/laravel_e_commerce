<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function index()
    {
        $wallet = auth()->user()->wallet ?? Wallet::create(['user_id' => auth()->id(), 'balance' => 0]);
        $transactions = $wallet->transactions()->latest()->paginate(15);
        return view('user-panel.wallet.index', compact('wallet', 'transactions'));
    }

    public function addFunds(Request $request)
    {
        $request->validate(['amount' => 'required|numeric|min:1']);

        $wallet = auth()->user()->wallet ?? Wallet::create(['user_id' => auth()->id(), 'balance' => 0]);
        $wallet->increment('balance', $request->amount);
        $wallet->transactions()->create([
            'type' => 'credit',
            'amount' => $request->amount,
            'description' => 'Funds added'
        ]);

        return redirect()->back()->with('success', 'Funds added successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainPage extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function homePage()
    {
        $user = User::findOrFail(Auth()->id());
        $userCards = $user->cards()->get();

        $userTransactions = [];
        foreach ($userCards as $card) {
            $cardTransactions = $card->transactions()->get();
            foreach ($cardTransactions as $transaction) {
                $userTransactions[] = $transaction;
            }
        }

        $cardsSearcher = [];
        foreach ($userCards as $card) {
            $cardsSearcher[$card['id']] = $card;
        }

        return view('dashboard', [
            'user' => $user,
            'cards' => $userCards,
            'transactions' => $userTransactions,
            'cardSearcher' => $cardsSearcher,
        ]);
    }
}

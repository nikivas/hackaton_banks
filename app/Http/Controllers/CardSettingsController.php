<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardSettingsController extends Controller
{
    public function getSettings($id)
    {
        $card = Card::findOrFail($id);

        return view('cardSettings', [
            'card' => $card,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCards() {
        $user = Auth::user();
        dd($user->cards()->get());
    }
}

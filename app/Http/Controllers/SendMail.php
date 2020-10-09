<?php

namespace App\Http\Controllers;

use App\Mail\AfterRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMail extends Controller
{

    public function send()
    {
        Mail::send(new AfterRegister('pass'));
    }
}

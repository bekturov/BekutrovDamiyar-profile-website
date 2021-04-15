<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function send() {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One';
        $objDemo->demo_two = 'Demo Two';
        $objDemo->sender = 'Sender';
        $objDemo->receiver = 'Receiver';

        Mail::to("bekturov.d767@gmail.com")->send(new DemoMail($objDemo));
    }
}

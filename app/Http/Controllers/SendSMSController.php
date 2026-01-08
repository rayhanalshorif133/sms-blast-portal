<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    public function singelSms(){
        return view('sms.send.single');
    }
}

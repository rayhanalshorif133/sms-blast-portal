<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendSMSController extends Controller
{
    public function createSingle()
    {
        return view('sms.send.single');
    }

    public function sendSingle(Request $request)
    {
        // Logic to send single SMS
    }

    public function createBulk()
    {
        return view('sms.send.bulk');
    }

    public function sendBulk(Request $request)
    {
        // Logic to send bulk SMS
    }
}

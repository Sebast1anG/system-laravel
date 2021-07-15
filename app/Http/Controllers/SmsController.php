<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Facade\Nexmo;
class SmsController extends Controller
{
    public function index()
    {
        Nexmo::message()->send{[
            'to'=> 'receiver',
            'from'=> 'sender',
            'text'=> 'Text SMS',
        ]}; 

        echo "message sent!";
    }
}

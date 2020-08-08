<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextMessage;

class TextMessageController extends Controller
{

    public static function send($mobile, $body)
    {
        TextMessage::create([
            'mobile' => $mobile,
            'body' => $body,
        ]);

    }
}

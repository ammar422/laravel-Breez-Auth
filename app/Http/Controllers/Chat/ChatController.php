<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Services\UserServices;



class ChatController extends Controller
{
    public function chatForm($id, UserServices $UserServices ){

       $receiver= $UserServices->SelectUser($id);
        return view('chat.chatForm',compact('receiver'));
    }
}

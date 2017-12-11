<?php

namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ChatController extends Controller
{
	function __construct() {
		$this->middleware(['auth']);
	}

	public function chat()
    {
    	return view('chat');
    }

//    public function send(Request $request)
//    {
//    	$user = User::find(Auth::id());
//    	event(new ChatEvent($request->message, $user));
//    }
    public function send()
    {
    	$user = User::find(Auth::id());
    	event(new ChatEvent('message', $user));
    }
}

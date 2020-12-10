<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function messages($email){
        return response()->json(Carousel::find($email),200);
    }

    public function sendMessage(Request $request){
        $message = new Message();
        $message->sender_email = $request->sender_email;
        $message->message = $request->message;
        if($message->save()){
            return response()->json("success",200);
        }else{
            return response()->json("failure",400);
        }
    }
}

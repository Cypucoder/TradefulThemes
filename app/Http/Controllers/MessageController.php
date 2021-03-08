<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    // Creates messages
    public function create(Request $request) {
        $message = new Message();
        $message->title = $request->input('title');
        $message->content = $request->input('content');
        $message->color1 = $request->input('1');
        $message->color2 = $request->input('2');
        $message->color3 = $request->input('3');
        $message->color4 = $request->input('4');
        $message->color5 = $request->input('5');

        $message->save();
        return redirect('/');
    }

    //view by id
    public function view($id, $success) {
       $message = Message::findOrFail($id);
       if($success == 'true'){
            echo "<script>";
            echo "alert('Update successful');";
            echo "</script>";
        }
       //echo $message->title;
       return view('message', [
           'message' => $message
       ]);
    }

    //update
    public function update($id, Request $request) {
        $message = Message::find($id);
        
        $message->title = $request->input('title');
        $message->content = $request->input('content');
        $message->color1 = $request->input('1');
        $message->color2 = $request->input('2');
        $message->color3 = $request->input('3');
        $message->color4 = $request->input('4');
        $message->color5 = $request->input('5');

        $message->save();
        $setTrue = "true";
        return redirect("/message/$id/$setTrue");
    }
}

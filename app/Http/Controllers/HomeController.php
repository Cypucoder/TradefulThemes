<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    //Replaces original code in web.php

    public function index() {
        //return view('welcome');
        $messages = Message::all();

        /*foreach($messages as $message) {
            echo $message->title;
        }*/

        return view('home', [
            'messages' => $messages
        ]);
    }
    
}

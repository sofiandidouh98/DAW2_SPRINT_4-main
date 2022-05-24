<?php

namespace App\Http\Controllers;

use App\Http\Requests\validationMessage;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index() {

        $users = User::select('id','name')->get();
        $messages = Message::orderBy('id', 'desc')->paginate();

        return view('message.index', compact('messages'), compact('users'));
    }

    public function create() {
        $users = User::select('id','name')->get();

        return view('message.create', compact('users'));
    }

    public function store(validationMessage $request){

       $message = new Message();

       $message->subject = $request->subject; 
       $message->content = $request->content; 
       //$message->sent_at = $request->sent_at; 
       $message->sent_by = $request->sent_by; 



       $message->save();

       return redirect()->route('message.show', $message);
    }

    public function show(Message $message) {

        return view('message.show', compact('message'));
    }

    public function edit(Message $message){
        $users = User::select('id','name')->get();

        return view('message.edit', compact('message'), compact('users'));
    }
    public function update(validationMessage $request, Message $message){

        $message->subject = $request->subject; 
        $message->content = $request->content; 
        $message->sent_at = $request->sent_at; 
        $message->sent_by = $request->sent_by; 

        $message->save();

        return redirect()->route('message.show', $message);
    }

    public function destroy(Request $request)
    {
        $message = Message::find($request->id);

        $message->delete();

        return redirect()->route('message.index');
    }
}

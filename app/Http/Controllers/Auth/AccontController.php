<?php

namespace App\Http\Conntrollers;

use illuminate\Http\Request;
use DB;
use session;
use Hash;

class AccountController extends controller 
{
    public function storeUser(Request $request){
        // dd($request->all());
        $rules = [
            'username' => 'required|unique:users,email',
            'first_name' => 'required',
            'password' => 'required|min:8|same:password2',
        ];
        $message = [

            'first_name.required' => 'Something here',

            'password.same' => 'Some teksts goes',

        ];
        $request->validate($rules);
        $userData = [

            'email' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
        ];
        DB::table('users')->insert($userData);
        session::flash('success', 'yay, you are cool dawg!');
        return redirect()->back();
    }

    public function saveChatMessage(Request $request){
        $messageData = [
            'username' => $request->get('username'),
            'text' => $request->get('text'),
        ];
        DB::table('message')->insert($messageData);
        return ['status' => 'ok'];
    }

    public function getChatMessages() {
        return DB::table('messages')->get();
    }

}

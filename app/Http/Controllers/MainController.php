<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function checkAdmin(Request $request){
//        dd($request);
        $login = $_POST("username");
        $password = $_POST("password");
//        $rem = $_POST("checkbox");
//        if($rem == true){
//
//        }
        $user = Users::where('login',$login)->where('password',$password)->get();
        if($user->isEmpty()){
            exit('Плохо');
//            $message = "Вы ввели неверный логин или пароль";
        }
        else {
            exit('хорощо!');
//            $message = [
//                'login' => $login,
//                'password' => $password
//            ];
        }
//        return response()->json($message);
        }
    public function store(Request $request)

    {

        $request->validate([
            'username'          => 'required',
            'password'         => 'required',
        ]);

        login::create([
            'username' => $request->username,
            'password' => $request->password,
            'checkbox' => $request->checkbox,
        ]);

        return response()->json(['success'=>'Contact form submitted successfully']);

}
}



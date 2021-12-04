<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;


class LoginController extends Controller
{
   protected function login(Request $request)
   {
       $validator = Validator::make($request->all(), [
           'email' => 'required|email',
           'password' => 'required',
       ]);

       if ($validator->passes()) {
           if (auth()->attempt(array('email' => $request->input('email'),
               'password' => $request->input('password')),true))
           {
               return response()->json(['type'=>'success', 'message' => 'You are logged']);
           }
           return response()->json(['type'=>'error','message' => 'Sorry User not found.']);
       }

       return response()->json(['error'=>$validator->errors()->all()]);
       return response()->json(['type'=>'error','message' => $validator->errors()->first()]);
   }

   protected function logout()
   {
       Auth::logout();
       return redirect('/');
   }
}

<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function checkAdmin(Request $request){
//        dd($request);
        $login = $request->input("login");
        $password = $request->input("password");
        $rem = $request->input("check");

        return view('admin');
        }

}

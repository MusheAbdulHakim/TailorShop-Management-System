<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecoverPasswordController extends Controller
{
    public function index(){
        $title = "forgot password";
        return view('auth.recover-password',compact('title'));
    }

    public function resetPassword(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
        ]);
        return back();
    }
    
}

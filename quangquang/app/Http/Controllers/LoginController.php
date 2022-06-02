<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login',['title'=>'Đăng nhập']);
    }

   


    public function post_login(Request $req){


           $this -> validate($req,[
                            'email'=>'required|email:filter',
                            'password'=>'required',
           ]);



           if(Auth::attempt(['email'=> $req->input('email'),'password'=>$req->input('password')],$req->input('remember')))
        {
            return redirect()->route('dashboard');

        }else{
            $req->session()->flash('error','Email mật khẩu không chính xác');
        return redirect()->back();
   }
}
public function logout(){

    Auth::logout();

    return view('auth.login');
}
}

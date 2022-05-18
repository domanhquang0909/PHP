<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;


class RegisterController extends Controller
{
    protected $user;
    public function __construct(User $user){
        $this->user = $user;
    }
    public function get_register(){
        return view('register');
    }


    public function post_register(CreateUserRequest $req){
        $this->user->checkRegister($req);
        return redirect('list');
    }


    public function list(){
        $item= User::select('id','mail_address','name','address','phone')->orderBy('mail_address','asc')->paginate(20);

     return view('list',compact('item'));
    }
}

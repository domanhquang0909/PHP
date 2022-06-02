<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    protected $user;
    public function __construct(User $user){
        $this->user = $user;
    }
    public function get_register(){
        return view('auth.register',['title'=>'Đăng ký']);
    }


    public function post_register(CreateUserRequest $req){
        $req['role'] = "1";
        $this->user->checkRegister($req);
        $data=[
            'name'=>$req->status,
        ];
        Mail::send('auth.verify-email',$data, function($email) use($req){
         $email-> from('manhquang2201@gmail.com','ADMIN');
         $email-> to($req->input('email'));
       });
            $req->session()->flash('success','Đăng ký tài khoản thành công');
            return redirect('login');
    }

    public function list(){
        $item= User::select('id','email','name','address','phone')->orderBy('email','asc')->paginate(20);

     return view('list',['title'=>'Danh sách user'],compact('item'));
    }
    
}

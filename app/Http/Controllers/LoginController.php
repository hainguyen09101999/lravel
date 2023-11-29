<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    public function adminlogin(){
        return view('admin.login', ['title' => 'Trang Quản Trị Admin'] );
    }
    public function postlogin(LoginRequest $request){
  
        $login = $request->validated();
       
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->route('home.admin');
        }
        return redirect()->back()->with('error', 'SAi mật khẩu hoặc tài khoản');
        }
public function out()
    {
        Auth::logout();
        return redirect()->route('adminlogin');
    }
}

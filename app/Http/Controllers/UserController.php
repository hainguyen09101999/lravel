<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
class UserController extends Controller
{
    public function dangnhap()
    {
        return view('Pages.user.login', ['title' => 'Trang Đăng Nhập']);
    }

    public function nhandulieu(LoginRequest $request)
    {
        $login = $request->validated();
        
            if (Auth::attempt($login)) {
                $request->session()->regenerate();
                return redirect()->route('home');
            }
         return redirect()->back()->with('error', 'Sai mật khẩu hoặc tài khoản');

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function dangki()
    {
        return view('Pages.user.register', ['title' => 'Trang Đăng Kí']);
    }

    public function guidulieu(UserRequest $request)
    {

        $input = $request->all();

    
    $Userdata = User::where('email', $input['email'])->orWhere('name', $input['name'])->first();

    if ($Userdata) {
        return redirect()->back()->with('error', 'Email hoặc tên người dùng đã tồn tại. Vui lòng thử lại.');
    } else {
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        session()->flash('error', 'Đăng kí thành công. Vui lòng đăng nhập.');
        return view('Pages.user.login');
    }
    }
}

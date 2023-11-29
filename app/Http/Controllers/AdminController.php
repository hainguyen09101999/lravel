<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $user=User::all();
        return view('admin.main' ,['title' => 'Admin Xin Chào'] ,compact('user'));
    }

    
}

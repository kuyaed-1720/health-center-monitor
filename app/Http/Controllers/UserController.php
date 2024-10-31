<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function logout()
    {
        $user = User::where('email', session('email'))->first();
        $user->update(['status' => 'offline']);
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function Register(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'fio' => 'required|string',
            'email' => 'required|email|unique:users',
            'login' => 'required|unique:users|string',
            'series' => 'required|integer',
            'password' => 'required|string|min:3|same:password-conf',
            'password-conf' => 'required|string|min:3',
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator->errors());
        };

        User::create([
            'fio' => $r->fio,
            'email' => $r->email,
            'login' => $r->login,
            'series' => $r->series,
            'password' => Hash::make($r->password)
        ]);

        return Redirect::to(route('login'))->with('register-success', 'Вы успешно зарегестрировались, теперь войдите в аккаунт');
    }


    public function Login(Request $r)
    {
        if (Auth::attempt([
            'login' => $r->login,
            'password' => $r->password
        ])) {
            $r->session()->regenerate();
            return Redirect::to(route('profile'));
        } else {
            return Redirect::back()->withErrors(['authError' => 'Неверный логин или пароль']);
        }
    }

    public function Logout(Request $r) {
        Auth::logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();
        return redirect()->route('login');
    }
}

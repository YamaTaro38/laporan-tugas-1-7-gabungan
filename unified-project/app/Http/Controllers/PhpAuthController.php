<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PhpAuthController extends Controller
{
    public function showLogin()
    {
        $message = Session::get('message', '');
        return view('php.login', compact('message'));
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $users = Session::get('users', []);

        if (isset($users[$username]) && $users[$username] === $password) {
            Session::put('logged_in_user', $username);
            Session::flash('message', 'welcome ' . $username);
        } else {
            Session::flash('message', 'wrong username/password');
        }

        return redirect('/php/login');
    }

    public function showRegister()
    {
        $message = Session::get('message', '');
        $messageClass = Session::get('message_class', '');
        return view('php.register', compact('message', 'messageClass'));
    }

    public function register(Request $request)
    {
        $username = trim($request->input('username'));
        $password = $request->input('password');

        if (!empty($username) && !empty($password)) {
            $users = Session::get('users', []);
            $users[$username] = $password;
            Session::put('users', $users);
            Session::flash('message', 'user is added');
            Session::flash('message_class', 'success');
        } else {
            Session::flash('message', 'Username dan password tidak boleh kosong!');
            Session::flash('message_class', 'error');
        }

        return redirect('/php/register');
    }

    public function logout()
    {
        Session::forget('logged_in_user');
        Session::flash('message', '');
        return redirect('/php/login');
    }
}
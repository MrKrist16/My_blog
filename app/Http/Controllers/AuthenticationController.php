<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthenticationController extends Controller
{

    // REGISTRATION
    public function returnViewRegistration()
    {
        return view('authentication.createAccount');
    }

    public function storeAccount(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' =>  'required|min:6',
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/');
    }

    // AUTHORIZATION

    public function returnViewLogin()
    {
        return view('authentication.login');
    }

    public function logIn()
    {
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }elseif(auth()->user()->name == 'Admin'){
            return redirect()->to('/admin/dashboard');
        }else{
            return redirect()->to('/');
        }
    }

    public function logOut()
    {
        auth()->logout();

        return redirect()->to('/');
    }

}

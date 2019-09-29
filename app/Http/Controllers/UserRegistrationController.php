<?php

namespace App\Http\Controllers;

use App\User;
use Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserRegistrationController extends Controller
{
    public function index(){
        return view('login.login');
    }
    public function UserRegister(Request $request){

        $request->validate([
            'first_name' => 'required|String',
            'last_name' => 'required|String',
            'email' => 'required|unique:users,email',
            'password' => 'required|String',
            'confirm-password' => 'required_with:password|same:password'
        ],[
            'first_name.required' => 'First name name is required',
            'last_name.required' => 'Last name name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email is required and already use this email',
            'password.required' => 'Password is required',
            'password.String' => 'password is required and  should be String',
            'confirm-password.same' => 'Password is not tally'
        ]);

        $user = Sentinel::registerAndActivate([
            'email' => $request->input('email'),
            'password' =>$request->input('password'),
            'first_name' =>$request->input('first_name'),
            'last_name' =>$request->input('last_name')
        ]);

        $role  = Sentinel::findRoleBySlug('user');
        $role->users()->attach($user);

        return redirect()->back();
    }
    public function login(Request $request){

        Sentinel::authenticate([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if (Sentinel::check()){

            if (Auth::attempt([
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ])) {
                return redirect('/');
            }

        } else {
            return redirect()->back()->with('error','Please check your email and password');
        }

    }

    public function logout(){
        Sentinel::logout();
        return redirect('/login');
    }

}

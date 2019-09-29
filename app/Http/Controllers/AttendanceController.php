<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use App\Exceptions\MediAPIException;

class AttendanceController extends Controller
{
    public $successStatus = 200;
    public function login(Request $request){

        Sentinel::authenticate([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (Sentinel::check()){

            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $user = Auth::user();
//                $success['token'] =  $user->createToken('MyApp')-> accessToken;
                return response()->json([
                    'result' => true,
                    'status' => 'successfully Logged',
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'password' => $user->password,
                    'token'=>null/*$user->createToken('MediApp')->accessToken*/
                ]);
            }
            else{
                return response()->json([
                    'result'=> false,
                    'error'=>'Unauthorised'
                ], 401);
            }

        } else {
            return response()->json([
                'result'=> false,
                'error'=>'Unauthorised'
            ], 401);
        }

    }
    public function userDetails(Request $request){
        $users = User::all();

        return response()->json([
            'success' => true,
            'results' => $users
        ]);
    }
}

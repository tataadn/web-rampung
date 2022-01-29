<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('do_logout');
    }

    public function index()
    {
        return view('page.auth.main');
    }

    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:255',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            } else {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $check = User::where("username", "=", $request->username)->first();
        if ($check) {
            if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password])) {
                // if (Auth::guard('web')->user()) {
                    return response()->json([
                        'alert' => 'success',
                        'message' => 'Welcome back ' . Auth()->user()->name,
                    ]);
                // } 
            }
            else {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Password salah!',
                ]);
            }
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'Username tidak ditemukan!',
            ]);
        }
    }


    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users|max:255|email',
            'username' => 'required|unique:users|max:25|min:8|alpha_num',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('name')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('name'),
                ]);
            } elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            } elseif ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            } elseif ($errors->has('password')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }
        }
        $user = new User;
        $user->name = Str::title($request->name);
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Selamat bergabung ' . $request->name,
        ]);
    }

    public function do_logout(){
        $user = Auth::guard('web')->user();
        Auth::logout($user);
        return redirect()->route('auth.index');
    }

}

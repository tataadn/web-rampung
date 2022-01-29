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
        $check = User::where("username", $request->username)->first();
        $user = $request->all();
        if ($check) {
            if (Auth::attempt($user)) {
                return response()->json([
                    'alert' => 'success',
                    'message' => 'Selamat Datang Kembali ' . Auth()->user()->name,
                ]);
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
        $user = $request->all();
        $user['name'] = Str::title($request->name);
        $user['password'] = Hash::make($request->password);
        User::create($user);
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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $user = User::where('id', Auth::user()->id)->first();
            return view('page.profile.list',compact('user'));
        }
        return view('page.profile.main');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('page.profile.input',compact('user'));
    }

    public function update(Request $request,User $user)
    {
            $exists = User::where('id', '!=',Auth::user()->id)->where('username',$request->username)->count();
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
                'username' => 'required|max:20|min:8',
            ]);
    
            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('name')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('name'),
                    ]);
                } 
                elseif ($errors->has('username')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('username'),
                    ]);
                } 
            }

            elseif ($exists) {
                return response()->json([
                    'alert' => 'error',
                    'message' => 'Username Sudah Digunakan. Cari Username Lain',
                ]);
            }

            if($request->current_password){
                $validator2 = Validator::make($request->all(), [
                    'current_password'=>['required', new MatchOldPassword],
                    'new_password' => 'required|min:8',
                    'new_confirm_password' => ['required','same:new_password'],
                ]);
                if($validator2->fails()) {
                    $errors = $validator2->errors();
                    if ($errors->has('current_password')) {
                        return response()->json([
                            'alert' => 'error',
                            'message' => 'Password Lama Anda Salah',
                        ]);
                    }
                    elseif ($errors->has('new_password')) {
                        return response()->json([
                            'alert' => 'error',
                            'message' =>  $errors->first('new_password'),
                        ]);
                    }
                    elseif ($errors->has('new_confirm_password')) {
                        return response()->json([
                            'alert' => 'error',
                            'message' => 'Konfirmasi password tidak sama',
                        ]);
                    }
                }
            }
           
            $user->name = Str::title($request->name);
            $user->username = $request->username;
            if($request->new_password)
            {
                $user->password = Hash::make($request->new_password);
            }
            $user->update();
            return response()->json([
                'alert' => 'success',
                'message' => 'Profile Telah Diperbaharui ',
            ]);
    }

    public function subscribe(Request $request, User $user,$id)
    {
        $user = User::where('id',$id)->first();
        $user->subscription = "Y";
        $subs = new Subscription;
        $subs->users_id = $request->users_id;
        $subs->email = $request->email_subs1;
        $user->update();
        $subs->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Telah Berhasil Langganan! ',
        ]);
    }

    public function destroy(User $user)
    {
        //
    }
}

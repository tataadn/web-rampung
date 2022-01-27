<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\User;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscribe = new Subscription;
        $subscribe->email = $request->email_subs2;
        $exists = Subscription::where('email',$request->email_subs2)->count();
        $exists2 = User::where('email',$request->email_subs2)->where('subscription', 'Y')->count();
        if ($exists) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Anda Sudah berlangganan!',
            ]);
        }
        else if ($exists2) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Anda Sudah berlangganan!',
            ]);
        }
        $user = User::where('email',$request->email_subs2)->count();
        if($user) {
            $subs = User::where('email',$request->email_subs2)->first();
            $subs->subscription = 'Y';
            $subscribe->users_id = $subs->id;
            $subs->update();
        }
        $subscribe->save();
        return response()->json([
            'alert' => 'success',
            'message' => $request->email . 'Terimakasih, Anda Telah Berhasil Langganan!',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}

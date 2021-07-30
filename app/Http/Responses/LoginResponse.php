<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        if (Auth::user()->hasRole('super-admin')) {
            return redirect('/admin/home');
        } 
        
        if (Auth::user()->hasRole('store-manager')) {
            return redirect('/store-manager/store-home');
        }

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(config('fortify.home'));
    }

}
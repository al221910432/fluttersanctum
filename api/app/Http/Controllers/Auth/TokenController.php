<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthenticationException;

class TokenController extends Controller
{
    public function _construct()
    {
        $this->middleware(['auth:sanctum'])->only('destroy');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            throw new AuthenticationException();
        }

        return [
            'token' => auth()->user()->createToken($request->deviceId)->plainTextToken
        ];
    }

    public function destroy(request $request) 
    {
        auth()->user()->Tokens()->where('name', $request->deviceId)->delete();
    }
}

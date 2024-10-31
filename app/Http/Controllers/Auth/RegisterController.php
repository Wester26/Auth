<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email', 'unique:users'],
            'document' => ['required', 'string', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:7']
        ]);
        $user = User::create($data);
        event(new Registered($user));
        Auth::login($user);
        return redirect()->route('verification.notice');
    }
}

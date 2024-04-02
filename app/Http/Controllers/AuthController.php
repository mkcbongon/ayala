<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAuth;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email|unique:auth',
            'password' => 'required|string|min:6',
        ]);

        $auth = new UserAuth();
            $auth->fullname = $request->fullname;
            $auth->email = $request->email;
            $auth->password = Hash::make($request->password);

        
            $auth->save();

            return redirect()->route('dashboard')->with('success', 'User registered successfully');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->user_type === 'admin') {
                $request->session()->put('admin', true);
                return redirect()->route('dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors(['Invalid user type for admin access']);
            }
        } else {
            return redirect()->back()->withErrors(['Invalid email or password']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/signup'); 
    }

}

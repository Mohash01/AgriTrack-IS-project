<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'role' => 'required',
            'username' => 'required|unique:register,username',
            'password' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:register,email',
            'town' => 'required',
        ]);

        // Hash the password before storing it
        $formFields['password'] = Hash::make($formFields['password']);

        Register::create($formFields);

        // Flashing message for successful registration
        Session::flash('message', 'Welcome, ' . ucfirst($formFields['role']) . '! Registration successful.');

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        
        Register::validate($credentials);

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }
    public function showLoginForm()
    {
        return view('login');
    }

    

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function show()
    {
        return view('register');
    }
}


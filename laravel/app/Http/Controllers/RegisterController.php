<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // Register controller.
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'role' => 'required',
            'username' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'town' => 'required',
        ]);

        Register::create($formFields);

        return redirect('listings')->with('message', 'Registration successful');
    }

    public function show()
    {
        return view('register');
    }
}

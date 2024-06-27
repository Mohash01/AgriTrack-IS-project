<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

   
    //register controller.
    public function store(Request $request){
        $formFields = $request ->validate([
            'role   ' => 'required',
            'username' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'town' => 'required',

        ]);
        
        register::create($formFields);

        return redirect('/')->with('registration successful', 'Congragulations');
    }
    public function show()
    {
        return view('register');
    }
}

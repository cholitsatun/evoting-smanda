<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginVoterController extends Controller
{
    public function index(){
        return view('loginvoter.loginvoter');
    }

    public function post(Request $request){
        $errors = $this->validate($request, [
            'nisn' => 'required',
            'password' => 'required',
        ]);
            // Attempt to log the user in
            // Passwordnya pake bcrypt
        if (Auth::guard('voter')->attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/suara/home');
        }

        return redirect()->intended('/login');
    }
    public function logout()
    {
    if (Auth::guard('voter')->check()) {
        Auth::guard('voter')->logout();
    } 
    return redirect('/login');
    }
}

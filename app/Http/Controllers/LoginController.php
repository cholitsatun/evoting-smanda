<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function post(Request $request)
    {
        $errors = $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
            // Attempt to log the user in
            // Passwordnya pake bcrypt
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            // if successful, then redirect to their intended location
            return redirect()->intended('/admin/paslons');
        }

        return redirect()->intended('/loginadmin');
    }

    public function logout()
    {
    if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
    } 
    return redirect('/loginadmin');
    }
}

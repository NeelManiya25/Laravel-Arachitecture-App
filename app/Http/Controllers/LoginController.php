<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\RegisterUser;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'     => 'required|email',
            'password'  => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        }

        return back()->withErrors(['email' => 'Invalid email or password.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login.form')->with('success','Logged out succesfully.');
    }


}
?>
<!-- je login successful thy paci dashboard page open in laravel -->
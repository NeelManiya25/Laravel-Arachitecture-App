<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Cookie\make;

class LoginController extends Controller
{
        public function showLoginForm()
        {
            return view('login');
        }

        public function login(Request $request)
        {
            $credentials = $request->validate([
                'email'     => 'required|email',
                'password'  => 'required',
            ]);
            if(Auth::attempt($credentials)){
                return redirect()->route('dashboard')->with('success','Login successful!');
            }
            return back()->with('error','Invalid credentiasl')
                        ->withCookie(Cookie('email',$request->email,5));
        }

        public function logout(Request $request)
        {
            Auth::logout();
            return redirect()->route('login.form')->with('success','Logged out successfully.');
        }


}
?>
<?php
namespace App\Http\Controllers;

use App\Models\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|unique:register_user_table,email',
            'phone' => 'required|string|unique:register_user_table,phone',
            'password' => 'required|min:6|confirmed',
            'role' => ['required', Rule::in(['admin', 'user'])],
        ]);

        RegisterUser::create([
            'name'   => $request->name,
            'dob'    => $request->dob,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'password'  => Hash::make($request->password),
            'role'      => $request->role,
        ]);
        return redirect()->route('register.form')->with('success','User regidtered successfully.');
    }
}

?>
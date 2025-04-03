<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersformController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name'        => 'required|string|max:255',
            'last_name'         => 'required|string|max:255',
            'email'             => 'required|email|unique:users,email',
            'mobile'            => 'nullable|string|max:15',
            'role'              => 'required|string',
            'password'          => 'required|min:6|confirmed',
        ]);

        $user = User::create([
                'first_name'        => $request->first_name,
                'last_name'         => $request->last_name,
                'email'             => $request->email,
                'mobile'            => $request->mobile,
                'password'          => Hash::make($request->password),
        ]);
        return response()->json([
                'message'       => 'User created successfully!',
                'user'          => $user
        ]);
    }

    public function index()
    {
        return view('users.usersform');
    }
}

?>

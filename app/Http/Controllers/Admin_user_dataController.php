<?php

namespace App\Http\Controllers;

use App\Models\Admin_user_data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Admin_user_dataController extends Controller
{
    public function index()
    {
        $users = Admin_user_data::paginate(15);
        return view('users.index',[
            'useres'       => $users
        ]);
    }

    public function create()
    {
        $users = new Admin_user_data;
        return view('user.create',compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|min:2|max:20|string|alpha:ascii',
            'lastname'  => 'required|string|max:20|min:2|alpha:ascii',
            'email'     => 'required|email|max:50',
            'mobile'    => 'required|min:10|regex:/^[0-9]{10}$/',
            'roles'     => 'required|string|max:255',
            'password'  => 'required|confirmed|min:8',
        ]);
        Admin_user_data::create([
            'firstname' => $request->firstname,
            'lastname'  => $request->lastname,
            'email'     => $request->email,
            'mobile'    => $request->mobile,
            'roles'     => $request->roles,
            'password'  =>Hash::make($request->password),
            // md5($request->password),  
        ]);
        return redirect('/user')->with('status', 'Created Successfully');
    }  
    public function shows(Admin_user_data $users){
        return view('user/show',compact('useres'));
    }

    public function edit(Admin_user_data $useres){
        return view('user.edit',compact('useres'));
    }

    public function update(Request $request, Admin_user_data $useres)
    {
        $request->validate([
            'firstname'  =>'required|min:2|max:20|string|alpha:ascii',
            'lastname'   =>'required|min:2|max:20|string|alpha:ascii',
            'email'      =>'required|email|max:50',
            'mobile'     =>'required|min:10|regex:/^[0-9]{10}$/',
            'roles'      =>'required|string|max:255',
        ]);
        $useres->update([
            'firstname'   => $request->firstname,
            'lastname'    => $request->lastname,
            'email'       => $request->email,
            'mobile'      => $request->mobile,
            'roles'       => $request->roles,
        ]);
        return redirect('/user')->with('status','Updated Successfully');
    }   

    public function destroy(Admin_user_data $useres){
        $useres->delete();
        return redirect('/user')->with('status','Deleted Successfully');
    }

}

<?php
use App\Http\Controllers\Controller;
use App\Models\Useress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UseressesController extends Controller
{
    public function index()
    {
        $users = Useress::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
            'email'     => 'required|email|unique:users',
            'mobile'    => 'nullable',
            'role'      => 'required',
            'password'  => 'required|min:6',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        Useress::create($validated);

        return redirect()->route('users.index')->with('User created');
    }

    public function edit(Useress $useress){
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, Useress $useress){
        $validated = $request->validate([
            'firstname'     => 'required',
            'lastname'      => 'required',
            'email'         => 'required|email|unique:users,email,'.$useress->id,
            'mobile'        => 'nullable',
            'role'          => 'required',
            'password'      => 'nullable|min:6',
        ]);

        if($request->filled('password')){
            $validated['password']  = Hash::make($validated['password']);
        }else{
            unset($validated['password']);
        }
        $useress->update($validated);
        return redirect()->route('users.index')->with('success','User updated');
    }

    public function destroy(Useress $useress)
    {
        $useress->delete();
        return redirect()->route('users.index')->with('success','User deleted');
    }
}
?>
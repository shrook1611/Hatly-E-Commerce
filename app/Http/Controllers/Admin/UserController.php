<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    

  
    public function index()
    {
        $users = User::all();
       
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.user.create', compact('users'));
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:categories,name',
            'email' => 'required|email',
            'role' => 'required|in:admin,customer',
            'password' => 'required|min:6',
           

        ]);
        $validated['password']=Hash::make($validated['password']);
       
     
      $user=  User::create($validated);
          $user->assignRole($validated['role']);
        return redirect()->route('user')->with('success', 'user created successfully');
    }
    public function edit($id)
    {
         

        $user = User::findOrFail($id);
       
        return view('admin.user.edit', compact('user'));
    }

   public function update(Request $request, $id)
{
    $product = User::findOrFail($id);
    
     $validated=  $request->validate([
        'name' => 'required|unique:categories,name',
            'email' => 'required|email',
            'role' => 'required|in:admin,customer',
            'password' => 'required|min:6',
            
    ]);
    $validated['password']=Hash::make($validated['password']);
    
    $product->update($validated); 
    
    return redirect()->route('user')->with('success', 'user updated successfully');
}



    public function delete($id)

    {
     
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user')->with('success', 'user deleted successfully');
    }
}

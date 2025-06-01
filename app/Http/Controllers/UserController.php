<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
       
        // Pass users to the view
        return view('main.user.index', compact('users'));
    }
    public function show($id)
    {
        // Logic to display a single user
        return view('users.show', ['id' => $id]);
    }
    public function create()
    {
        // Logic to show user creation form
        return view('users.create');
    }  
    public function store(Request $request)
    {
        // Logic to store a new user
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Assuming User model exists
        User::create($data);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    public function edit($id)
    {
        // Logic to show user edit form
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        // Logic to update user details
        $user = User::findOrFail($id);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($request->filled('password')) {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
        public function destroy($id)
        {
        // Logic to delete a user
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

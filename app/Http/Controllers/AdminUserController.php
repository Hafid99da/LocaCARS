<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    
//////////////////////////////////////

    public function create()
    {
        //
    }

//////////////////////////////////////

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

//////////////////////////////////////


    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

//////////////////////////////////////

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user = User::find($user->id);
        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

//////////////////////////////////////

    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('Admin.pages.users.index', compact('users'));
    }

    public function create()
    {
        return view('Admin.pages.users.add');
    }

    public function store(UserStoreRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }

        User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show(User $user)
    {
        return view('Admin.pages.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('Admin.pages.users.edit', compact('user'));
    }

    public function update(UserStoreRequest $request, User $user)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/users', 'public');
            $validatedData['image'] = $imagePath;
        }

        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}

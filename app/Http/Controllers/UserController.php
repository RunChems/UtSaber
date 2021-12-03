<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::first()->paginate();
        return view('user.index', compact('users'));
    }


    public function create()
    {
        return view('user.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create($request->all());
        return response()->json(['success' => 'User Created successfully.'])->status(201);
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }


    public function update(Request $request, $id)
    {

        User::where('id', $id)->get()->first()->update($request->all());

        if (Auth::user()->role == 'admin') {
            return redirect()->route('users.index')->with('success', 'User updated successfully');

        }
        return redirect()->route('users.profile')->with('success', 'User updated successfully');

    }


    public function destroy(User $user)
    {
        $user->delete();
        return response()->json(['success' => 'User deleted successfully.'])->status(204);
    }
}

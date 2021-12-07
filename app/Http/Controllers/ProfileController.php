<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function update(Request $request, int $user)
    {
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'password' => 'nullable|string|min:8',
            'oldPassword' => 'required|string|min:8',
        ]);
        echo $user;
        $userPassword = User::where('id', $user)->first()->password;
        if (!password_verify($request->oldPassword, $userPassword)) {
            return redirect()->route('profile')->withErrors(['errors' => ['Contraseña incorrecta']]);
        }

        $user->update($request->all());
        User::where('id', $user->id)->get()->first()->update($request->all());
        return redirect()->route('profile')->with('success', 'User updated successfully');

    }

}

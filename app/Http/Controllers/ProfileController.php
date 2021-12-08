<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function update(Request $request, $user)
    {
        $request->validate([
            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'password' => 'nullable|string|min:8',
        ]);

        $user = User::where('id', $user)->get()->first();
        if (!password_verify($request->oldPassword, $user->password) && isset($user->password)) {
            return redirect()->route('profile')->withErrors(['errors' => ['Contraseña incorrecta']]);
        }
        $pass = bcrypt($request->password, ['cost' => 10]);

        USER::where("id", $user->id)->update(['password' => $pass, 'name' => $request->name, 'email' => $request->email]);
        $user->save();
        return redirect()->route('profile')->with('success', 'User updated successfully');

    }

}

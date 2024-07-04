<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class LoginController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'string', 'email', 'max:150'],
            'password' => ['required', 'string', 'max:150']
        ]);

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'authorization' => 'Неправильный логин или пароль.'
            ]);
        }
        return redirect()->intended();
    }

    public function destroy (Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}

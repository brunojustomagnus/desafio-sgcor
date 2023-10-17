<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'mensagem' => ['required', 'string', 'max:255'],
            'altura' => ['required', 'numeric', 'regex:/^\d+\.\d{2}$/'],
            'peso' => ['required', 'numeric', 'regex:/^\d+\.\d{2}$/'],
            'telefone' => ['min:16', 'max:18'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $telefone = str_replace(['(', ')', ' ', '-'], '', $request->telefone);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'altura' => $request->altura,
            'peso' => $request->peso,
            'mensagem' => $request->mensagem,
            'telefone' => $telefone,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create(Request $request)
    {
        // Guardar la URL de donde viene el usuario para redirigirlo después del login.
        // Solo guardamos si es una URL interna (no la propia página de login).
        if (!$request->session()->has('url.intended')) {
            $previousUrl = url()->previous();

            // Evitamos guardar la URL de login/register como destino
            if (
                $previousUrl !== route('login') &&
                $previousUrl !== route('register')
            ) {
                $request->session()->put('url.intended', $previousUrl);
            }
        }

        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            $request->session()->regenerate();

            // redirect()->intended() busca la URL guardada en 'url.intended'.
            // Si no hay ninguna, usa el fallback (la página principal del sitio).
            return redirect()->intended(route('sitio.index'));
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput();
    }


    public function destroy(Request $request)
{
    Auth::guard('web')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('sitio.index');
}

}

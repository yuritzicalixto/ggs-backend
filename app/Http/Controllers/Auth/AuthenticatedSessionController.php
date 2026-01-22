<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login'); // Asegúrate de que esta vista exista
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // Redirige a la ruta deseada
        }

        // Si falla el login
    return back()->withErrors([
        'email' => 'Las credenciales no coinciden con nuestros registros.',
    ])->withInput();
    }
}

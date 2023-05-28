<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{

    public function index(Request $request)
    {
        return view('account', ['view' => 'index', 'user' => $request->user()]);
    }

    public function profile(Request $request)
    {
   
        return view('profile', [ 'user' => $request->user()]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validar los campos que se pueden actualizar
        $request->validate([
            'occupation' => 'required|in:worker,student,other',
            'personality' => 'required|string|max:255',
        ]);

        // Actualizar los campos correspondientes
        $user->occupation = $request->occupation;
        $user->personality = $request->personality;
        $user->save();

        // Redireccionar a la página de perfil con un mensaje de éxito
        return redirect()->route('account.profile')->with('success', 'Información de perfil actualizada correctamente.');
    }

}

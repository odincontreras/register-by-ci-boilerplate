<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signUp()
    {
        $user = session()->get('user');

        if (empty($user)) {
            return redirect()->back()->withErrors([
                'user' => 'Debe verificar su cedula antes de configurar su cuenta.'
            ]);
        }

        return view('sign-up', ['user' => $user]);
    }

    public function signIn()
    {
        $user = session()->get('user');

        if (empty($user)) {
            return redirect()->back()->withErrors(['user' => 'Debe verificar su cedula antes de iniciar sesion.']);
        }

        return view('sign-in', ['user' => $user]);
    }

    public function verifyCi(Request $request)
    {
        $body = $request->all();

        $user = User::where('ci', $body['ci'])->first();

        if (empty($user)) {
            return redirect()->back()->withErrors(['user' => 'No se encontro un usuario con esta cedula.']);
        }

        session()->flash('user', $user);

        if ($user->isConfigured) {
            return redirect()->route('sign-in');
        }

        return redirect()->route('sign-up');
    }
}

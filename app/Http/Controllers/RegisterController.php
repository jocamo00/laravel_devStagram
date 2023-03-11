<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        // dd($request->get('username'));

        // Validación
        // Método de laravel para hacer validaciones, le pasamos las reglas de validación.
        $this->validate($request, [
            'name' => 'required | min:5',
        ]);
    }
}

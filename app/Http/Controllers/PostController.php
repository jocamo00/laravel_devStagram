<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct() {
         // va a comprobar que el usuario este autenticado antes de ejecutar el index que mostrara la vista del muro
        $this->middleware('auth');
    }
    
    public function index() {
        return view('dashboard');
    }
}

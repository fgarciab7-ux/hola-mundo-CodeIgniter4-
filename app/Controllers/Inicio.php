<?php

namespace App\Controllers;

class Inicio extends BaseController
{
    public function index()
    {
        $datos = [
            'titulo'  => 'Hola mundo utilizando CodeIgniter4 Framework',
            'mensaje' => 'Fernando Garcia.',
        ];

        return view('home_view', $datos);
    }
}

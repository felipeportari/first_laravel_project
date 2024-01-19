<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $message = 'Sobre Nós';

        return view('about.about', [
            'message' => $message
        ]);
    }
}

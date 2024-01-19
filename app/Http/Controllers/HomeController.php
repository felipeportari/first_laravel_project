<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mensage = 'fuck it. we ball';

        return view('home/index', [
            'mensage' => $mensage
        ]);
    }
}

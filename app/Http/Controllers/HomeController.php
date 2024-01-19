<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function HomeController()
    {
        $mensage = 'fuck it. we ball';

        return view('index', [
            'mensage' => $mensage
        ]);
    }
}

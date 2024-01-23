<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return view('blog.blog');
    }

    public function see(string $slug)
    {
        $artigos = [
            [
                'id' => 1,
                'nome' => 'aderbal junior'
            ],
            [
                'id' => 2,
                'nome' => 'macarroni'
            ],
            [
                'id' => 3,
                'nome' => 'test'
            ]
        ];

        foreach ($artigos as $artigo) {
            if ($artigo['id'] == $slug) {
                return view('blog.see', ['artigo' => $artigo]);
            }
        }
    }
}

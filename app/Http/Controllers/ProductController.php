<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = [
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

        return view('product.product', [
            'products' => $products,
        ]);
    }

    public function see(string $slug)
    {
        $products = [
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

        foreach ($products as $product) {
            if ($product['id'] == $slug) {
                return view('product.see', ['product' => $product]);
            }
        }
        if (array_key_exists($slug, $products) == false) {
            echo "esse produto não existe";
        }
    }
}

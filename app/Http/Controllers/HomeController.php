<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        $category = 'Shoes';
        $tombol = '<button style="background-color: red; color: white; border-radius: 5px;">Click Me</button>';
        return view('home', [
            'product_category' => $category,
            'product_name' => 'Logitech G502 Hero',
            'product_price' => 799000,
            'button' => 'Click Me',
            'button2' => $tombol
        ]);
    }

    
}

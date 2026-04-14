<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() {
        $category = 'Shoes';
        $tombol = '<button style="background-color: red; color: white; border-radius: 5px;">Click Me</button>';
        return view('home', [
            'product_categories'=>ProductCategory::with(['products'])->get(),
        ]);
    }

    
}

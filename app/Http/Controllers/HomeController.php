<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home')->with([
            'title' => 'خانه',
            'categories' => Category::with(['parent', 'children'])->get(),
        ]);
    }
}

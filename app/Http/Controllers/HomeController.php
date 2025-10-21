<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $datas = Category::all();
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'requiredunique:categories,category_name',
        ]);

        Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect('/home')->with('success', 'category has been added!');
    }
}

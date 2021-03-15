<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function view()
    {
        //$categories = Category::factory()->count(10)->make();
        $categories = DB::table('categories')->orderBy('rank')->get();
        return view('category')
        ->with('categories', $categories);
    }






}

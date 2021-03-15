<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function view()
    {
        $categories = Category::getCategories(); 
        
        return view('admin.wiki.add_page')
        ->with('categories', $categories);
    }
}

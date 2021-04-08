<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function view()
    {
        $categories = Category::getCategories(); 
        
        return view('admin.wiki.add_page')
        ->with('categories', $categories);
    }

    public function addPage(Request $request)
    {
        $array = [
            'author' => Auth::user()->id, 
            'category_id' => $request->input('category'),
            'desc_short' => $request->input('desc'),
            'title' => $request->input('title'),
            'body' => $request->input('editor'),
            'created_at' => now(),
            'updated_at' => now()
        ];
        
        DB::table('pages')->insert($array);
        return redirect(route('article', $request->input('category')));
    }


}

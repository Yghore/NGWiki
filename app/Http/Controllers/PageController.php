<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function view(string $slug)
    {
        $articles = Page::factory()->count(10)->make();
        //$slug = Str::slug('Laravel 5 Framework', '-');
    
        $id = intval(explode('-', $slug)[0]);
        if($id == 0){
            return redirect(route('home'));
        }
        $articles = DB::table('pages')->where('category_id', '=', $id)->get();
        // dd($articles);
        return view('article')
        ->with('articles', $articles);
    }

}

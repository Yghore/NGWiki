<?php

namespace App\Http\Controllers;


use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function view()
    {
        $articles = Page::factory()->count(10)->make();
        return view('article')
        ->with('articles', $articles);
    }
}

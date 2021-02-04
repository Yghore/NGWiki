<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function test(Request $request){
        $content = "";
        if(!empty($request->input('editor')))
        {
            $content = $request->input('editor');
            $content = preg_replace("/[\n\r|\r\n|\r|\n]/m", "", $content);
        }
        return view('admin.wiki.edit')->with('content', $content);
    }

}

// <span style="background-color: rgba(110, 158, 110, 0.39);"></span>

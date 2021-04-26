<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function list()
    {
        $imgs = ImageController::arrayImages();
        return view('admin.image.list')->with('img_list', $imgs);
    }


    public function view()
    {
        return view('admin.image.add');
    }

    public function addImage(Request $request)
    {
        $namefile = $request->input('img_name');
        $file = $request->file('file_img');
        $exten = $request->file('file_img')->extension();
        if (!Storage::disk('public')->exists($namefile)) {
            $request->file('file_img')->storeAs('public', $namefile . "." . $exten);
            return redirect(route('admin.image.list'))->with(['success' => 'Le fichier à bien été envoyé !']);
        }
        return redirect(route('admin.image.list'))->withErrors(['file_exist' => 'Le fichier existe déjà !']);
    }
    


    public static function arrayImages()
    {
        $files = Storage::disk('public')->allFiles();
        $files_accepted = [];
        foreach ($files as $file) 
        {
            if(in_array(pathinfo($file)['extension'], ['jpg', 'png', 'jpeg', 'gif']))
            {
                array_push($files_accepted, $file);
            }
        }
        return $files_accepted;
    }
}

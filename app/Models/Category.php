<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static function getCategories()
    {
        $categories = Category::all();
        if(!empty($categories))
        {
            return $categories;
        }
        return [];
    }

}

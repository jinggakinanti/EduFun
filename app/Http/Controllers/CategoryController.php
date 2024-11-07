<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article as ArticleModel;
use App\Models\Category as CategoryModel;

class CategoryController extends Controller
{
    public function view($id)
    {

        $category = CategoryModel::with(['articles'])->findOrFail($id);
    
        return view('edufun.category', compact('category'));
    }

}

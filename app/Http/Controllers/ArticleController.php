<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article as ArticleModel;
use App\Models\Category as CategoryModel;

class ArticleController extends Controller
{
    public function view($id){
      
        $article = ArticleModel::with(['category','writer'])->findOrFail($id);

        return view('edufun.article', compact('article'));
    }

}

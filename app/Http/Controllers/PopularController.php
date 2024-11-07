<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article as ArticleModel;

class PopularController extends Controller
{
    public function view(){
       
        $articles = ArticleModel::with('writer')->orderBy('view', 'desc')->paginate(3);
        return view('edufun.popular', compact('articles'));
    }
}

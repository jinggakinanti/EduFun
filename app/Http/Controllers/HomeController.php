<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article as ArticleModel;

class HomeController extends Controller
{
    public function view(){

        $articles = ArticleModel::get();

        return view('edufun.home', compact('articles'));
    }
}

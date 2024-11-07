<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Writer as WriterModel;
use App\Models\Article as ArticleModel;

class WriterController extends Controller
{
    public function view(){
       
        $writers = WriterModel::get();

        return view('edufun.writer', compact('writers'));
    }

    public function detail($id){

        $writer = WriterModel::find($id);
        $articles = ArticleModel::where('writer_id', $id)->get();

        return view('edufun.writerDetail', compact('writer', 'articles'));
    }
}

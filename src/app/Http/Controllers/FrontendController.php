<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
		return view('articles.index', ['articles' => Article::all()]);
	}

	public function show($id){
		$article = Article::find($id);
		return view('articles.show', ['article' => Article::findOrFail($id)]);
	}
}

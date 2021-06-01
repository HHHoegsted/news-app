<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

	public function index(){
		return Article::all();
	}

	public function show($id){
		return Article::find($id);
	}

	public function store(Request $request){
		$validated = $request->validate([
			'title' => 'required|max:255',
			'body' => 'required',
			'image_url' => 'required|url',
		]);

		$article = Article::create([
			'title' => $validated['title'],
			'body' => $validated['body'],
			'image_url' => $validated['image_url'],
		]);

		return $article;
	}

	public function update($id, Request $request){
		$article = Article::find($id);
		$validated = $request->validate([
			'title' => 'max:255',
			'body' => '',
			'image_url' => 'url',
		]);

		foreach($article->getAttributes() as $key=>$value){
			if(array_key_exists($key, $validated)){
				$article[$key] = $validated[$key];
			}
		}
		$article->save();

		return $article;
	}
}

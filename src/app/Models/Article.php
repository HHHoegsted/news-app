<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

	const EXCERPT_LENGTH = 100;

    protected $fillable = [
      'title',
      'body',
      'image_url',
    ];

	public function excerpt(){
		return Str::limit($this->body, Article::EXCERPT_LENGTH);
	}
}

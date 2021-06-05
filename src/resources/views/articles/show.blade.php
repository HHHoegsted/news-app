@extends('Layouts.main')

@section('content')

<Article>
	<img src="{{ $article->image_url }}" alt="">
	<h1>{{ $article->title }}</h1>
	<p>{{ $article->body }}</p>
</Article>
<a href="/articles">Back</a>

@endsection

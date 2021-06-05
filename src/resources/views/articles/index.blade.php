@extends('Layouts.main')

@section('content')
	@foreach($articles as $article)
		<article>
			<a href="/article/{{ $article->id }}"><h1>{{ $article->title }}</h1></a>
			<p>{{ $article->excerpt() }}</p>
		</article>
	@endforeach
@endsection

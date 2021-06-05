@extends('Layouts.main')

@section('content')

	<img src="{{ $article->image_url }}" alt="" class="image-fluid w-100 rounded" style="max-height:250px;object-fit:cover;">

	<h1>{{ $article->title }}</h1>

	<p>Udgivet den {{ date('d-m-Y',strtotime($article->created_at)) }}</p>

	<p>{{ $article->body }}</p>


@endsection

@section('footer')

	<a class="btn btn-primary" href="/articles" role="button">Tilbage</a>

@endsection

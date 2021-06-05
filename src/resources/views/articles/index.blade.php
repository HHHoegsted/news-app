@extends('Layouts.main')

@section('content')
	<div class="card-deck d-flex justify-content-around">

		@foreach($articles as $article)
			<div class="card my-2" style="min-width: 15rem; max-width: 25%">
				<img src="{{ $article->image_url }}" class="card-img-top" style="width: 100%;height: 15vw;object-fit: cover;">
				<div class="card-body">
					<a href="/article/{{ $article->id }}"><h5 class="card-title">{{ $article->title }}</h5></a>
				</div>
				<div class="card-text p-2">
					<p>{{ $article->excerpt() }}</p>
				</div>
			</div>
		@endforeach

	</div>
@endsection

@section('footer')

	{{ $articles->links() }}

@endsection


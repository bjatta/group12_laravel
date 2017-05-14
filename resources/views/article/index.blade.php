@extends('layouts.app')

@section('content')
    <h1>Новости</h1>

    @forelse($articles as $article)
        <section>
            <a href="{{ route('article.show', ['slug' => $article->slug]) }}">
                <h2> {{ $article->title }} </h2>
                <p>{{ $article->short_description }}</p>
            </a>
        </section>
    @empty
        <p>Увы</p>
    @endforelse
    {{ $articles->render() }}
@endsection

@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row align-items-center">
    <div class="col-md-8 mx-auto">
      <h1 class="my-4 text-center">Bienvenue sur le Blog</h1>

      @forelse ($posts as $post)
      <div class="card mb-4">
        <img class="card-img-top" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title text-center">{{ $post->title }}</h2>
          <p class="card-text"> {{ Str::limit($post->body) }} </p>
          <a href="/posts/{{ $post->id }}" class="btn btn-primary">Lire plus &rarr;</a>
        </div>
        <div class="card-footer text-muted">
          Posté le {{ $post->created_at->diffForHumans() }} par
          <a href="#">{{ $post->user->name }} </a>
        </div>
      </div>
      @empty
          <p>Pas d'articles disponibles pour l'instant</p>
      @endforelse

    </div>
  </div>
</div>
@endsection

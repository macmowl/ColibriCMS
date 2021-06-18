@extends('layouts.master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <h3 class="mt-4">{{ $post->title }} <span class="lead"> par <a href="#"> {{ $post->user->name }} </a></span> </h3>
      <hr>
      <p>Posté le {{ $post->created_at->diffForHumans() }} </p>
      <hr>
      <img class="img-fluid rounded" src=" {!! !empty($post->image) ? '/uploads/posts/' . $post->image :  'http://placehold.it/750x300' !!} " alt="">
      <hr>
      <p class="lead">{{ $post->body }}</p>
      <hr>
      <div class="card my-4">
        <h5 class="card-header">Laisser un commentaire:</h5>
        <div class="card-body">
          <form>
            <div class="form-group">
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

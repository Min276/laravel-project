@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="h5 mb-4 fw-semibold" style="color: #495057" >Article List</h1>
  <div class="row my-4">
    @foreach($articles as $article)
    <div class="col-12 col-md-6">
    <div class="rounded p-4 mb-4 shadow" style="height: 17.5rem">
      <a href="{{ url("/articles/detail/$article->id") }}" 
        class="text-decoration-none text-black">
        <h1 class="h5" style="color: #578df2">
          <span>{{ $article['id'] }}</span>. {{ $article['title'] }}
        </h1>
        <p class="fw-semibold" style="font-size: 15px; color: #495057">
          <span>
            <i class="bi bi-clock" style="color: #495057"></i>
            {{ $article['created_at']->diffForHumans() }}
          </span>
          <span class="badge ms-2" style="background: #61676c">
            Category {{ $article['category_id'] }}
          </span>
        </p>
        <p style="color: #495057">{{ Str::limit($article['body'], 300) }}</p>
      </a>
      <a class="text-decoration-none fw-semibold" 
         style="font-size: 15px; color: #578df2" 
         href="{{ url("/articles/detail/$article->id") }}">
        View Detail <i class="bi bi-chevron-double-right"></i>
      </a>
    </div>
  </div>
    @endforeach
    {{ $articles->links() }}
  </div>
  <div>
    @endsection

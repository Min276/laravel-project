@extends('layouts.index')

<div class="container" style="max-width: 1000px">
  <div class="my-4">
    <div class="rounded p-4 mb-4 shadow">
      <a href="#" class="text-decoration-none text-black">
        <h1 class="h5" style="color: #578df2">
          <span>{{ $article['id'] }}</span>.{{ $article['title'] }}
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
        <p style="color: #495057">
            {{ $article['body'] }}
        </p>
      </a>
    </div>
  </div>
  <div>
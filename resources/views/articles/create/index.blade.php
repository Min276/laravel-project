@extends('layouts.index')

<div class="container" style="max-width: 600px">
  <div class="my-5">
    @if($errors->any())
    <div class="alert alert-warning">
      <ol>
        @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
        @endforeach
      </ol>
    </div>
    @endif
    <div class="rounded p-4 mb-4 shadow">
        <h2 class="h4">Write an article ... </h1>
        <form method="POST" class="my-4">
          @csrf
            <label for="text" class="form-label">Article Title</label>
            <input type="text" class="form-control mb-3" name="title"  />
            <label for="body" class="form-label">Article Description</label>
            {{-- <input type="password" class="form-control mb-4" name="password"  /> --}}
            <textarea name="body" class="form-control mb-3"  rows="4" cols="50"></textarea>
            <label for="category" class="form-label">Article Category</label>
            <select name="category_id" class="form-select mb-5">
                <option value="1">Local</option>
                <option value="2">Global</option>
                <option value="3">General</option>
                <option value="4">Tech</option>
                <option value="5">Politics</option>
            </select>
            <input type="submit" class="btn btn-primary me-3" value="Publish" />  
            {{-- <a  type="submit"  class="btn btn-primary me-3"><i class="bi bi-vector-pen me-1"></i> Publish</a> --}}
            <a href="/" class="btn btn-danger"><i class="bi bi-arrow-counterclockwise"></i> Reset</a>
          </form>
          </div>
      
    </div>
  </div>
  <div>
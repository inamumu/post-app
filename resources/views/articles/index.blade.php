@extends('layouts.app')

@section('title', '記事一覧')

@include('layouts.header')

@section('content')
<div class="main_inner">
  <section class="list">
    <div class="head02">
      <h2>List</h2>
    </div>
    <div class="column">
      @foreach($articles as $article)
      <a href="" class="col">
        <p class="username">{{ $article->user->name }}</p>
        <p class="time"> {{ $article->created_at->format('Y/m/d H:i') }}</p>
        <p class="title">{{ $article->title }}</p>
        <p class="content">{!! nl2br(e( $article->body )) !!}</p>
      </a>
      @endforeach
    </div>
  </section>
</div>
@endsection

@include('layouts.footer')
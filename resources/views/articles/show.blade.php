@extends('layouts.app')

@section('title', '記事詳細')

@include('layouts.header')

@section('content')
<div class="main_inner">
  <section class="list">
    <div class="head02">
      <h2>記事詳細</h2>
    </div>
    <div class="column">
      <div class="col">
        <p class="username">{{ $article->user->name }}</p>
        <p class="time"> {{ $article->created_at->format('Y/m/d H:i') }}</p>
        <p class="title">{{ $article->title }}</p>
        <p class="content">{!! nl2br(e( $article->body )) !!}</p>
        @if( Auth::id() === $article->user_id )
        <p class="edit"><a href="{{ route('articles.edit', ['article' => $article]) }}">編集</a></p>
        <p class="delete">
          <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
            @csrf
            @method('DELETE')
            <button type="submit">削除する</button>
          </form>
        </p>
        @endif
      </div>
    </div>
  </section>
</div>
@endsection

@include('layouts.footer')
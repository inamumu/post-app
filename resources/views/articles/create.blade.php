@extends('layouts.app')

@section('title', '記事投稿')

@include('layouts.header')

@section('content')
<div class="main_inner">
  <section class="form_area">
    <div class="head02">
      <h2>記事投稿</h2>
    </div>
    <form method="POST" action="{{ route('articles.store') }}">
      @include('articles.form')
      <div class="submit_field">
        <input type="submit" value="投稿する">
      </div>
    </form>
  </section>
</div>
@endsection

@include('layouts.footer')
@extends('layouts.app')

@section('title', '記事更新')

@include('layouts.header')

@section('content')
<div class="main_inner">
  <section class="form_area">
    <div class="head02">
      <h2>記事更新</h2>
    </div>
    <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
      @method('PATCH')
      @include('articles.form')
      <div class="submit_field">
        <input type="submit" value="更新する">
      </div>
    </form>
  </section>
</div>
@endsection

@include('layouts.footer')
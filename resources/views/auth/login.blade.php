@extends('layouts.app')

@section('title', 'ログイン')

@include('layouts.header')

@section('content')
<div class="main_inner">
  <section class="form_area">
    <div class="head02">
      <h2>ログイン</h2>
    </div>
    @include('error_list')
    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="text_field">
        <label for="email">メールアドレス</label>
        <input type="text" id="email" name="email" required value="{{ old('email') }}" >
      </div>
      <div class="text_field">
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" required>
      </div>
      <input type="hidden" name="remember" id="remember" value="on">
      <div class="submit_field">
        <input type="submit" value="ログイン">
      </div>
    </form>
  </section>
</div>
@endsection

@include('layouts.footer')
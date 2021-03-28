@extends('layouts.app')

@section('title', 'ユーザー登録')

@include('layouts.header')

@section('content')
<div class="main_inner">
  <section class="form_area">
    <div class="head02">
      <h2>ユーザー登録</h2>
    </div>
    @include('error_list')
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="text_field">
        <label for="name">ユーザー名（英数字3〜16文字）</label>
        <input type="text" id="name" name="name" required value="{{ old('name') }}">
      </div>
      <div class="text_field">
        <label for="email">メールアドレス</label>
        <input type="text" id="email" name="email" required value="{{ old('email') }}" >
      </div>
      <div class="text_field">
        <label for="password">パスワード</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="text_field">
        <label for="password_confirmation">パスワード（確認）</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>
      </div>
      <div class="submit_field">
        <input type="submit" value="新規登録">
      </div>
    </form>
  </section>
</div>
@endsection

@include('layouts.footer')
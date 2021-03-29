@csrf
<div class="text_field">
  <label for="title">タイトル</label>
  <input type="text" name="title" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="text_field">
  <label for="body">本文</label>
  <textarea name="body" required rows="16" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>
<input type="hidden" name="remember" id="remember" value="on">
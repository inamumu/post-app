@csrf
<div class="text_field">
  <label for="title">タイトル</label>
  <input type="text" id="title" name="title" required value="{{ old('title') }}" >
</div>
<div class="text_field">
  <label for="body">本文</label>
  <textarea name="body" id="body" rows="16" value="{{ old('body')}}"></textarea>
</div>
<input type="hidden" name="remember" id="remember" value="on">
@section('header')
<div class="header_inner">
  <div class="head01">
    <h1>Logo</h1>
  </div>
  <nav class="nav">
    <div class="toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="global_nav">
      <ul>
        @guest
        <li><a href="{{ route('register') }}">Register</a></li>
        <li><a href="">Login</a></li>
        @endguest
        @auth
        <li><a href="">MyPage</a></li>
        <li><a href="">Post</a></li>
        <li><button form="logout-button" class="dropdown-item" type="submit">ログアウト</button></li>
        @endauth
        <li><a href="">Contact</a></li>
      </ul>
      <form id="logout-button" method="POST" action="{{ route('logout') }}">
        @csrf
      </form>
    </div>
  </nav>
</div>
@endsection
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <!-- Styles -->
  <link href="{{ asset(mix('css/reset.css')) }}" rel="stylesheet">
  <link href="{{ asset(mix('css/base.css')) }}" rel="stylesheet">
  <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
  <!-- Scripts -->
  <script src="{{ asset(mix('js/app.js')) }}" defer></script>
</head>
<body>
  <div id="app">
    <App />
    <header class="header">
    </header>
    <main class="main">
      @yield('content')
    </main>
    <footer class="footer">
    </footer>
  </div>
</body>
</html>
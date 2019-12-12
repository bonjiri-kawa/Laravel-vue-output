<html>
<head>
  <title>Larabel | @yield('title', 'Home')</title>
</head>
<body>

  @section('sidebar')
    <p>メインのサイドバー（共通部分）</p>
  @show

  <div id="container">
    @yield('content')
  </div>

  @section('footer')
    <script src="app.js"></script>
  @show

</body>
</html>
{{-- <html>
  <head>
    <title>アプリ名　- @yield('title')</title>
  </head>
  <body>
    <h2>テスト</h2>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html> --}}
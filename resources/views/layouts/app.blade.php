<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title', 'Meu Site Laravel')</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <header class="site-header">
    <div class="banner">
      <img src="{{ asset('images/banner.jpg') }}" alt="Banner do site" class="banner-img">
    </div>
    <nav class="main-nav">
      <a href="{{ route('products.index') }}">Lista de Produtos</a> |
      <a href="{{ route('products.create') }}">Novo Produto</a>
    </nav>
  </header>

  <main class="container">
    @if(session('success'))
      <div class="alert success">{{ session('success') }}</div>
    @endif

    @yield('content')
  </main>

  <footer class="site-footer">
    <p>© {{ date('Y') }}</p>
  </footer>
</body>
</html>

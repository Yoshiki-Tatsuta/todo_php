<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDo App</title>
     @yield('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootflat/2.0.4/css/bootflat.min.css" integrity="sha512-3TYUrzSN1ix3NZvR8B8s5H8kXIIU0lQAsPWUE5CyFOwXKXTwS5MxfBdrVRYAr3mkYMajX90zvJpJcXIGXwcEBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <nav class="my-navbar">
        <a class="my-navbar-brand" href="/loginhome">ToDo App</a>
        <div class="my-navbar-control">
          @if(Auth::check())
            <span class="my-navbar-item">ようこそ、{{ Auth::user()->name }}さん</span>
            |
            <a href="/" id="logout" class="my-navbar-item">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
          @else
            <a class="my-navbar-item" href="{{ route('login') }}">ログイン</a>
            |
            <a class="my-navbar-item" href="{{ route('register') }}">会員登録</a>
          @endif
        </div>
    </nav>
</header>
<main>
@yield('content')
</main>
@if(Auth::check())
  <script>
    document.getElementById('logout').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
  </script>
@endif
@yield('scripts')
</body>
</html>
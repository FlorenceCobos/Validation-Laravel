
<html>
    <head>
      <meta charset="utf-8">
      <title>Reservation - @yield('title')</title>
      <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    </head>
    <body>
      <header>
        <div class="title"></div>
        
          
        
          @include('layouts.aside')
      </header>
        <main>
          @yield('content')
        </main>
        <script type="text/javascript" src="{{asset('/js/script.js')}}"></script>
    </body>
</html>

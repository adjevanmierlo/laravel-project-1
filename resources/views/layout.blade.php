

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    {{-- x -csrf-token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- css link --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- icon in je browser-tab --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('images/superman.png')}}">

</head>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
          <div class="d-flex flex-grow-1">
            {{-- <span class="w-100 d-lg-none d-block"><!-- center brand on mobile --></span> --}}
            <a class="navbar-brand" href="./."><img src="{{ asset('images/logo.png') }}"></a>
            <div class="w-100 text-right">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>

          <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
            <ul class="navbar-nav ml-auto flex-nowrap">
              <li class="nav-item">
                <a href="./." class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="About" class="nav-link ">About</a>
              </li>
              {{-- <li class="nav-item">
                  <a href="Projecten" class="nav-link">Projecten</a>
              </li> --}}
              <li class="nav-item">
                <a href="Contact" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>

      @yield('content')
    {{-- js link  --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/canvas.js') }}"></script>
</body>

</html>

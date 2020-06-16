<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Home</title>
     <!-- Font Awesome icons (free version)-->
     <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
     <!-- Core theme CSS (includes Bootstrap)-->
     <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('/css/style_custom.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('/js/sal.js/dist/sal.css') }}">
     <meta name="csrf-token" content="{{ csrf_token() }}" />
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <style>
          #homeNav {
             padding-top: 1rem;
             padding-bottom: 1rem;
             font-family: "Montserrat", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
             font-weight: 700;
             border-bottom: 2px solid  #fec013;
             background-color: white;
          }
          #homeNav a {
             color: #092d5b;
          }
          #homeNav a:hover {
             color:#092d5b;
          }
          #homeNav .nav-link:active {
             color:#fec013;
          }
          #homeNavbar .nav-link:hover {
             color:#fec013 !important;
          }
          #homeNavbar .nav-link.active {
             color:#fec013;
          }
      </style>
 </head>
 <body>
         <!-- Navigation-->
         <nav class="navbar navbar-expand-md bg-white" id="homeNav">
             <div class="container">
                 <a class="navbar-brand js-scroll-trigger text-uppercase" href="#page-top">
                     <img class="logo-img" src="{{ asset('assets/img/logo.png') }}" alt=""> Otten32Run
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                     <span ><i class="fa fa-bars"></i></span>
                 </button>
                 <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav mr-auto">
                         
                     </ul>
                     <ul class="navbar-nav" id="homeNavbar">
                         <li class="nav-item">
                             <a class="nav-link" href="{{ url('/login') }}">Pembayaran</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="{{ url('/login') }}">Tiket</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                         </li>
                     </ul>
                 </div>
             </div>
         </nav>
 
         <div class="container">
             <br>
             <h3 class="text-center">@yield('judul_halaman')</h3>
             @yield('konten')
             <br>
         </div>
     <!-- Bootstrap core JS-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
     <!-- Third party plugin JS-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
 
     <!-- Core theme JS-->
    <script src="{{ asset('js/sal.js/dist/sal.js') }}"></script>
     <script>
         sal({
             once: false
         });
     </script>
 </body>
 </html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>GREATEFUL BEGINNINGS MEDICAL</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ mix ('resources/css/welcome.css') }}" rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">


      {{-- <h5 class="logo me-auto"><a href="{{url('/')}}"></a>ONLINE APPOINTMENT SYSTEM WITH 
        PATIENT INFORMATION MANAGEMENT</h5> --}}

            <div class="container-fluid">
 <img class="imglogo" src="{{mix('resources/img/logo.webp')}}" alt="logo">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">

                        {{-- font style navbar not fix to change to nunito --}}

                        <a style="font-weight: bold; color:#607ebd" class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a style="font-weight: bold; color:#607ebd;" class="nav-link" href="#">Services</a>
                      </li>
                      
                      <li class="nav-item">
                        <a style="font-weight: bold; color:#607ebd;" class="nav-link" href="#">Location</a>
                      </li>

                      <li class="nav-item">
                        <a style="font-weight: bold; color:#607ebd;" class="nav-link" href="#">About us</a>
                      </li>
                      
                      <li class="nav-item">
                        <a style="font-weight: bold; color:#607ebd;" class="nav-link" href="{{ route('login') }}">  <span data-feather="calendar" class="size-10 align-text-bottom"></span> Book an appointment</a>
                      </li>
                    </ul>
                  
                    
                  </div>
   

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a style=" font-weight: bold; color: #607EBD;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style=" font-weight: bold; color: #607EBD;" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a style="color: #607EBD;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }}
                                    {{ Auth::user()->lname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

   <div class="container-md">
<h1><strong>Grateful Beginnings Medical</strong></h1>
<h5 class="h4text">Dental, Lying-in, and Pediatrician Clinic</h5>


<br>
<br>
<a href="{{ route('login') }}">
<button type="button" class="btn btn-primary" >  Book an appointment</button></a>

<br><br><br>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos atque laborum ratione, iusto autem reiciendis assumenda sapiente velit. Tenetur dolore consequuntur illum nobis temporibus dolor facilis voluptate nam molestias corrupti?
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem labore reiciendis magni dolorem soluta eum minima veritatis deleniti qui sapiente eveniet, beatae iusto? Porro laborum, repellat voluptate magni unde officia!Lorem
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam dolor ex aliquid obcaecati ea illum sequi soluta quos incidunt porro, ipsam repellendus adipisci ipsa voluptate similique laboriosam fugit dolorum labore!
</p>


<br>
<br><br><br><br>

Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur laudantium quisquam culpa aliquid odio nobis totam veniam distinctio odit fuga quis atque quas perferendis assumenda, repudiandae velit cum, animi fugit.
<br><br>
<h3>location</h3>
   <div class="ratio"  style="--bs-aspect-ratio: 30%;">
    <iframe src="https://maps.google.com/maps?q=Grateful%20Beginnings%20Medical,%20Pediatric,%20Dental%20and%20Lying%20in%20Clinic,%20Calamba,%204027%20Laguna&t=&z=13&ie=UTF8&iwloc=&output=embed" title="Maps" ></iframe>
  </div>

  <br><br><br>
   </div>

    
    


</body>
<script type="text/javascript" src="{{ mix('resources/js/app.js') }}"></script>
<script>
    feather.replace()
  </script>
</html>

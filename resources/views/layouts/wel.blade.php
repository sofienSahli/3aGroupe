<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>3AGroupe</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Eya.css') }}" rel="stylesheet">

<body>
<div id="app">
    <!--
        carroussel start

    -->

    <div id="demo" class="carousel slide" data-ride="carousel" >

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
            <li data-target="#demo" data-slide-to="4"></li>

        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/carousel_1.jpg')}}" alt="" class="img-fluid">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/carousel_2.jpg')}}"  class="img-fluid"  alt="">
            </div>

            <div class="carousel-item">
                <img src="{{asset('images/carousel_3.jpg')}}"  class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/carousel_4.jpg')}}" class="img-fluid"  alt="">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/carousel_5.jpg')}}" class="img-fluid"  alt="">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <!--
       carroussel end

   -->
    <nav class="navbar navbar-expand-md navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="image-fluid" src="{{asset('images/logo.png')}}"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Left Side Of Navbar -->

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item" style="border-bottom: 1px solid #95a5a6; margin-left: 10px;">
                    <a class="nav-link" href="/#" role="button"
                       aria-haspopup="false" aria-expanded="false">ACCEUIL</a>
                </li>
                <li class="nav-item" style="border-bottom: 1px solid #f1c40f; margin-left: 10px; ">
                    <a class="nav-link" href="/#service"
                    >SERVICES</a>
                </li>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown" style="border-bottom: 1px solid #2ecc71; margin-left: 10px;">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false">COMPETENCES</a>
                        <div class="dropdown-menu">

                            @foreach($compagnies as $compagny)
                                <a class="dropdown-item"
                                   href="/compagnie/{{$compagny->id}} ">{{$compagny->name}}</a>
                            @endforeach
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/#propos"
                           style="border-bottom: 1px solid #8f0222; margin-left: 10px;"
                        >A PROPOS</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#equipes"
                           style="border-bottom: 1px solid #8f0222; margin-left: 10px;"

                        >EQUIPES</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact"
                           style="border-bottom: 1px solid #27ae60; margin-left: 10px;">CONTACT</a></li>
                </ul>
            </ul>
        </div>

    </nav>
</div>
<main style="padding: 0px; ">
    @yield('content')
</main>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
<script type="text/javascript">
    $('ul.pagination').hide();
    $(function () {
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/images/loading.gif" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function () {
                $('ul.pagination').remove();
            }
        });
    });
</script>
</html>

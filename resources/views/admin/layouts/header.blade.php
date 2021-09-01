<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TOPNET: Apporteurs d'affaires pour entreprises en Tunisie</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.topnet.tn/assets/img/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('template2/dist/assets/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('template2/dist/assets/vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('template2/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('template2/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('template2/dist/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('template2/dist/assets/images/favicon.svg')}}" type="image/x-icon">




    <script src="{{ asset('js/app.js') }}"></script>


</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="wrapper">
        <header class="header-top" header-theme="light">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <div class="top-menu d-flex align-items-center">
                        <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                        <div class="header-search">

                        </div>
                        <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                    </div>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>


                                <div class="d-flex align-items-center">

                                    <div class="avatar avatar-xl">
                                        <img src="{{asset('images')}}/{{ Auth::user()->Image}}" class="table-user-thumb" alt="" width="200">

                                    </div>
                                    <div class="ms-3 name">
                                        <strong>{{Auth::user()->Nom}}</strong>
                                    </div>
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Se déconnecter ') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>


                </div>

            </div>
    </div>

    </header>
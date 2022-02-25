<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->

    <!-- start box icon -->
    <link href='/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/scss/Agreements&Memoranda-of-Understanding.css">
    @extends('layouts.head-en')
    <link rel="stylesheet" href="{{ asset('scss/table-test.css') }}">

    <!-- start wol js -->

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>


<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo"><img src="/icons/Untitled-1.png" alt="" class="img-fluid"></a>


            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="/">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">

                <ul>
                    @guest

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>
                            </li>
                            {{-- <li><a href="/login"> تسجيل الدخول </a></li> --}}
                        @endif
                    @else
                        {{-- <li><a href="/logout"> تسجيل الخروج </a></li> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    @endguest
                    <li class="dropdown"><a href="/en"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/abouten">About University</a></li>
                            <li><a href="/leaderunien">University Presidency </a></li>
                            <li><a href="/feesen">Tuition fees </a></li>
                            <li><a href="/strategyen">University strategy </a></li>
                            <li><a href="/facutlydocen">Doctors </a></li>
                            <li><a href="/agreementsen">Agreements </a></li>

                            <li><a href="/leaderworden">University President word</a></li>
                            <li><a href="/facutlylaben">labs</a></li>
                            <li><a href="/facutlyresearchen">achievements </a></li>
                            <li><a href="/compusen">compus </a></li>
                            <li><a href="/chartEn">statistics </a></li>

                            {{-- <li><a href="/papersen">Cellender term </a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreementsen"><span>Acceptable</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/agreementsen">LogIN Machine </a></li>
                            <li><a href="/accepten">Acceptable Rules </a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">Register Papaer </a></li>

                        </ul>
                    </li>
                    {{-- <li><a href="/login"> تسجيل الدخول </a></li> --}}
                    @endif
                @else
                    {{-- <li><a href="/logout"> تسجيل الخروج </a></li> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>


                @endguest
                <li class="dropdown"><a href="/en"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/abouten">About University</a></li>
                        <li><a href="/leaderunien">University Presidency </a></li>
                        <li><a href="/feesen">Tuition fees </a></li>
                        <li><a href="/strategyen">University strategy </a></li>
                        <li><a href="/facutlyen">Doctors </a></li>
                        <li><a href="/agreementsen">Agreements </a></li>

                        <li><a href="/leaderworden">University President word</a></li>
                        <li><a href="/facutlylaben">labs</a></li>
                        <li><a href="/facutlyresearchen">achievements </a></li>
                        <li><a href="/compusen">compus </a></li>
                        <li><a href="/chartEn">statistics </a></li>

                        {{-- <li><a href="/papersen">Cellender term </a></li> --}}
                    </ul>
                </li>
                <li class="dropdown"><a href="/agreementsen"><span>Acceptable</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/agreementsen">LogIN Machine </a></li>
                        <li><a href="/accepten">Acceptable Rules </a></li>
                        <li><a target="_blank" href="https://www.pe-gate.org/">Register Papaer </a></li>

                    </ul>
                </li>





                <li class="dropdown"><a href="/facutlyen"><span>Facutlies</span> <i
                            class="bi bi-chevron-down"></i></a>


                    <ul>
                        @foreach ($faculties as $f)
                            <li class="dropdown"><a href="/Facutlyen/{{ $f->id }}/show"><span>
                                        {{ $f->name_en }}</span> <i class="bi bi-chevron-right"></i></a>
                                @foreach ($departments as $depart)
                                    @if ($depart->id_facutly == $f->id)
                                        <ul>
                                            <li><a
                                                    href="/departmenten/{{ $depart->id }}/show">{{ $depart->name_en }}</a>
                                            </li>
                                        </ul>
                                    @endif
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown"><a href="/labexamfacen"><span>Online Studty </span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="/facutlylecen">Term lecture table</a></li>
                        <li><a href="/facutlyexamen">Exam Table </a></li>

                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="/magazinen">Magazin </a></li>
                <li><a class="nav-link scrollto" href="/papersen">Cellender </a></li>
                <li><a class="nav-link scrollto" href="/centersen">English Center </a></li>

                <li><a id="lang" class="nav-link scrollto" href="/">AR </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
        </nav><!-- .navbar -->

    </div>
    </div>

    </div>

</header><!-- End Header -->
<!-- end navbar -->

<!-- start section 1 -->
<section class="section-1">
    <div class="container">
        <div class="alert text-center alert-light">
            <h3><i class="fas fa-handshake"></i>Details</h3>
        </div>
        <div class="row justify-content-around">
            @foreach ($agreements as $ag)
                <div class="col-md-5">
                    <img class="rounded" src="{{ $ag->image }}" alt="">
                    <i class="fas fa-handshake"></i>
                    <h2 class="d-inline text-capitalize">{{ $ag->name_en }}</h2>
                    <p>{{ $ag->abstract_en }}</p>
                    {{-- <a class="btn  btn-light" href"{{ $ag->pdf }}">Download</a> --}}
                    <a href="/agreementsen/{{ $ag->id }}/show" class="btn btn-secondary">More</a>
                </div>
            @endforeach

            <div class="col-md-5">

            </div>
        </div>
    </div>
</section>


<!-- End section 1 -->


<!-- start light & dark -->
<div class="dark-mood ">
    <i class="fas moon"></i>
</div>
<!-- start light & dark -->
<!-- starting section 1 -->

<!-- end section 1 -->

<!--start footer -->

@extends('layouts.footer-en')


<!-- start jquery -->
<script src="/js/jquery-3.6.0.min.js"></script>
<!-- start owl carousel -->

<!-- start bootstrap -->
<script src="/js/jquery.slim.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>

<script src="/js/main.js"></script>
<script src="/js/dark.js"></script>
<script src="/js/lang.js"></script>
<script src="/js/nav.js"></script>





</body>

</html>

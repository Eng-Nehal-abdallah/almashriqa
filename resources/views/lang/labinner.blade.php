<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- start box icon -->
    <link href='/css/boxicons.min.css' rel='stylesheet'>
    <!--start fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link rel="stylesheet" href="/scss/Scientific-plan-report.css">
    @extends('layouts.head-en')
    <link rel="stylesheet" href="{{ asset('scss/table-test.css') }}">


    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>






<body class="light text-left">

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo"><img src="/icons/Untitled-1.png" alt="" class="img-fluid"></a>


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

<<<<<<< HEAD
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>


                            @endguest
                            <li class="dropdown"><a href="/en"><span>Home</span> <i
                                        class="bi bi-chevron-down"></i></a>
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
                                    <li><a href="/agreementsen">Registration mechanism</a></li>
                                    <li><a href="/accepten">Acceptable Rules </a></li>
                                    <li><a target="_blank" href="https://www.pe-gate.org/">Register Papaer </a></li>

                                </ul>
                            </li>





                            <li class="dropdown"><a href="/facutlyen"><span>Facutlies</span> <i
                                        class="bi bi-chevron-down"></i></a>


                                <ul>
                                    @foreach ($Facutlies as $f)
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
=======
                            {{-- <li><a href="/papersen">Cellender term </a></li> --}}
>>>>>>> 6540ddc29f1abfedfe62c0e256d962e24388c2a4
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreementsen"><span>Acceptable</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/agreementsen">Registration mechanism</a></li>
                            <li><a href="/accepten">Acceptable Rules </a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">Register Papaer </a></li>

                        </ul>
                    </li>





                    <li class="dropdown"><a href="/facutlyen"><span>Facutlies</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($Facutlies as $f)
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
    </header><!-- End Header -->
    <!-- end navbar -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->

    <br><br><br>


    <style>
        .col-md-5 {
            max-width: 90%;
            height: auto;
            position: relative;
            display: block;
            margin: 0 auto;
        }

        img {
            width: 100% !important;
            height: 100% !important;
            display: block;
        }

    </style>
    <!-- start section 1 -->

    <!-- start section 1 -->
    <section class="section-1">
        <div class="container">
<<<<<<< HEAD

            <div class="row">
                <div class="col-md-5">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-5">

                    <div class="alert text-center alert-light" role="alert">
                        {{ $lab->name_en }}
                        <br>
                        {{ $lab->details_en }}
                        <div class="table-responsive-lg">
                            <img src="/{{ $lab->image }}" />
                            <img src="/{{ $lab->images }}" />
                        </div>

                    </div>
                </div>
=======
            <div class="alert  alert-light" role="alert">
                {{ $lab->name_en }}
            </div>
            <div class="table-responsive-lg">
>>>>>>> 6540ddc29f1abfedfe62c0e256d962e24388c2a4
            </div>


            <div class="row justify-content-around">
                <div class="col-md-5 my-1">
                    <img class="rounded" src="/{{ $lab->image }}" />

                </div>
                <div class="col-md-5 my-1">
                    <img class="rounded" src="/{{ $lab->images }}" />
                </div>
                <div class="col-md-10 text-left">
                    <p class="my-3">
                        {{ $lab->details_en }}

                    </p>
                </div>
            </div>

        </div>
    </section>




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



    <!-- start section -->
    <script src="/js/main.js"></script>
    <script src="/js/dark.js"></script>
    <script src="/js/nav.js"></script>

    <script>
        var bool = true;

        $(document).ready(function() {
            $('#lang').on('click', function() {

                if (bool == true) {
                    $("body").removeAttr("dir", "ltr");
                    $("body").attr("dir", "rtl");

                    $('.section-1').removeClass('text-left')
                    $('.section-1').addClass('text-right')

                    $('.section-2').removeClass('text-left')
                    $('.section-2').addClass('text-right')
                    bool = false;
                } else if (bool == false) {
                    $("body").removeAttr("dir");
                    $("body").attr("dir", "ltr");

                    $('.section-1').removeClass('text-right')
                    $('.section-1').addClass('text-left')
                    $('.section-2').removeClass('text-right')
                    $('.section-2').addClass('text-left')
                    bool = true;
                }

            })
        })
    </script>


</body>

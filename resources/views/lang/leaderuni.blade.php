<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->
    @extends('layouts.head-ar')


    <link rel="stylesheet" href="/scss/doctors.css">
    <link rel="stylesheet" href="{{ asset('scss/table-test.css') }}">

    <link rel="stylesheet" href="/css/navbar.css">
    <link rel="stylesheet" href="/scss/dark&light.css">




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
                            <li><a href="/agreementsen">Registration mechanism</a></li>
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
    </header><!-- End Header -->
    <!-- end navbar -->
    <!-- end navbar -->

    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->
    <!-- start header -->

    <br>
    <br>
    <br>
    <br>

    <style>
        img {
            height: 250px !important;
        }

        .col-lg-4 {
            max-width: 300px !important;
        }

    </style>



    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-2">
        <div class="container">
            <h1 class="text-center my-5">رئاسة الجامعة</h1>
            <div class="row text-right">
                @foreach ($doctors as $doct)
                    <div class="col-lg-4 col-sm-12 col-md-5 col-sm-10 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ $doct->image }}" class="img-fluid imgs" alt="">
                                <div class="social">
                                    @foreach ($types as $type)
                                        @foreach ($socials as $social)
                                            @if ($social->id_type == $type->id && $doct->id == $social->id_leader)
                                                <a href="$social->link">{{ $type->name_en }}</a>

                                                <a href="$social->link">{{ $type->name_en }}</a>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ $doct->name_en }}</h4>
                                <span>{{ $doct->position_en }}</span>

                                <a href="/leaderen/{{ $doct->id }}/show" class="btn btn-dark my-3 ">Visit
                                    Profile </a>


                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <h1 class="text-center my-5">عمداء الجامعة</h1>

            <div class="row text-right">
                @foreach ($leaders as $leader)
                    <div class="col-lg-4 col-sm-12 col-md-5 col-sm-10 d-flex align-items-stretch">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ $leader->image }}" class="img-fluid imgs" alt="">
                                <div class="social">
                                    @foreach ($types as $type)
                                        @foreach ($socials as $social)
                                            @if ($social->id_type == $type->id && $leader->id == $social->id_leaderuni)
                                                <a href="$social->link">{{ $type->name_en }}</a>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </div>
                            </div>
                            <div class="member-info">
                                <h4> {{ $leader->name_en }} </h4>
                                <span> {{ $leader->position_en }} </span>
                                <a href="/leaderunien/{{ $leader->id }}/show" class="btn btn-dark my-3 ">Visit
                                    Profile </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Team Section -->


    <!--start footer -->

    @extends('layouts.footer-en')

    <!-- start jquery -->
    <script src="./js/jquery-3.6.0.min.js"></script>
    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/dark.js') }}"></script>
    <script src="{{ asset('js/nav.js') }}"></script>



</body>

</html>

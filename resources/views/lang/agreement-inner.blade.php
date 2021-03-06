<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @extends('layouts.head-ar')
    <link rel="stylesheet" href="/scss/agreement-inner.css">
    <link rel="stylesheet" href="{{ asset('scss/table-test.css') }}">



    <!-- start wol js -->

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>


<body class="text-right">

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
                            <li><a href="/facutlyresearchen">Researches </a></li>
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
                                            <ul>
                                                @foreach ($departments as $depart)
                                        @if ($depart->id_facutly == $f->id)

                                                <li><a
                                                        href="/departmenten/{{ $depart->id }}/show">{{ $depart->name_en }}</a>
                                                </li>

                                        @endif
                                    @endforeach
                                </ul>
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


    <!-- start section 2 -->
    <br><br><br>

    <section class="section-2 text-left">
        <div class="container-fluid">
            <div class="row justify-content-around">

                <div class="col-md-5 col-sm-10">
                    <img src="/{{ $agreement->image }}" alt="">
                </div>

                <div class="col-md-5 col-sm-10">
                    <div class="caption">

                        <h2>{{ $agreement->name_en }}</h2>
                        <p>{{ $agreement->details_en }}</p>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End section 1 -->
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



    <script>
        var bool = true;

        $(document).ready(function() {
            $('#lang').on('click', function() {

                if (bool == true) {
                    $("body").removeAttr("dir", "ltr");
                    $("body").attr("dir", "rtl");

                    $('p').removeClass('text-left')
                    $('p').addClass('text-right')

                    bool = false;
                } else if (bool == false) {

                    $("body").removeAttr("dir");
                    $("body").attr("dir", "ltr");

                    $('p').removeClass('text-right')
                    $('p').addClass('text-left')


                    bool = true;
                }

            })
        })
    </script>

</body>

</html>

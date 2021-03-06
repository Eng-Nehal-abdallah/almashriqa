<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" href="/scss/style.css">
    @extends('layouts.head-ar')
    <link rel="stylesheet" href="{{ asset('scss/table-test.css') }}">




    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>



    <link rel="stylesheet" href="/scss/about-us.css">


    <!--start fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href=/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href=/css/slick-theme.css" />

    <link rel="stylesheet" href=/css/navbar.css">

    <title>Document</title>
</head>

<body dir="ltr">
    <!-- start box icon -->
    <!-- start navbar -->
    <header id="header" dir="rtl" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo"><img src="/icons/Untitled-1.png" alt="" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">

                <ul>
                    @guest

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('?????????? ????????????') }}</a>
                            </li>
                            {{-- <li><a href="/login"> ?????????? ???????????? </a></li> --}}
                        @endif
                    @else
                        {{-- <li><a href="/logout"> ?????????? ???????????? </a></li> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('?????????? ????????????') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    @endguest
                    <li class="dropdown"><a href="/"><span>????????????????</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/about">???? ??????????????</a></li>
                            <li><a href="/leaderuni">?????????? ??????????????</a></li>
                            <li><a href="/fees">???????????? ???????????????? </a></li>
                            <li><a href="/strategy">?????????????????? ?????????????? </a></li>
                            <li><a href="/facutlydoc">?????????????? ??????????????????</a></li>
                            <li><a href="/agreements">???????????????????? ?????????????? ??????????????</a></li>

                            <li><a href="/leaderword">???????? ???????? ??????????????</a></li>
                            <li><a href="/facutlylab">??????????????????</a></li>
                            <li><a href="/facutlyresearch">?????????????? </a></li>
                            <li><a href="/compuss">?????????? ??????????????</a></li>
                            <li><a class="nav-link scrollto" href="/chart">???????????????????? </a></li>

                            {{-- <li><a href="/papers">???????????????? ??????????????</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/mechine"><span>???????? ?????????????? ?? ????????????</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/mechine">???????? ??????????????</a></li>
                            <li><a href="/accept">???????? ????????????</a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">?????????????? ??????????????</a></li>

                        </ul>
                    </li>




                    <li class="dropdown"><a href="#"><span>??????????</span> <i class="bi bi-chevron-down"></i></a>


                        <ul>
                            @foreach ($faculties as $f)
                                <li class="dropdown"><a href="/Facutly/{{ $f->id }}/show"><span>
                                            {{ $f->name_ar }}</span> <i class="bi bi-chevron-right"></i></a>
                                            <ul> @foreach ($departments as $depart)
                                                @if ($depart->id_facutly == $f->id)

                                                        <li>
                                                            <a href="/department/{{ $depart->id }}/show">{{ $depart->name_ar }}</a>
                                                        </li>

                                                @endif
                                            @endforeach
                                        </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/labexamfac"><span>?????????????? ????????????????????</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/facutlylec">???????? ?????????????????? ????????????????</a></li>
                            <li><a href="/facutlyexam">???????? ???????????????????? ??????????????????????</a></li>

                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="/magazin">???????? ??????????????</a></li>
                    <li><a class="nav-link scrollto" href="/papers">?????????????? ?????????????????? </a></li>
                    <li><a class="nav-link scrollto" href="/centers">???????? ?????????? ????????????????????</a></li>

                    <li><a class="nav-link scrollto" href="/en">EN </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- end navbar -->


    <!-- start header -->
    <div class="header">
        <div class="caption">
            <h1 class="heading"> ?????????? ????????????  </h1>


        </div>

        <div class="overlay"></div>

    </div>
    <!-- start section-1 -->



    <!-- start section-1 -->
    <section class="section-1 text-right" dir="rtl">

        <div class="container">

            <div class="head">
                <br>
                <!-- <small>???? ??????????????</small> -->
            </div>
            <h3 style="font-size: 40px; color: rgb(1, 1, 85);" class="text-center d-block ">???? ??????</h3>

            <div class="row justify-content-around">
                <div class="col-md-12">
                    <p style="font-weight: bold;" class="my-5 ">
                        {{ $mash->about_ar }}
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- end section 1 -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->


    <!--start footer -->

    @extends('layouts.footer-ar')


    <!-- start jquery -->
    <script src=/js/jquery-3.6.0.min.js"></script>
    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src=/js/jquery.slim.min.js"></script>
    <script src=/js/popper.min.js"></script>
    <script src=/js/bootstrap.min.js"></script>
    <script type="text/javascript" src=/js/slick.min.js"></script>

    <script src=/js/main.js"></script>
    <script src=/js/dark.js"></script>
    <script src=/js/lang.js"></script>

    <script src=" {{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src=" {{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src=" {{ asset('/js/popper.min.js') }}"></script>
    <script src=" {{ asset('/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/slick.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- start section -->
    <script src=" {{ asset('/js/main.js') }}"></script>
    <script src=" {{ asset('/js/dark.js') }}"></script>
    <script src=" {{ asset('/js/nav.js') }}"></script>



    <script>
        $(function() {
            var header = $(".start-style");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 10) {
                    header.removeClass('start-style').addClass("scroll-on");
                } else {
                    header.removeClass("scroll-on").addClass('start-style');
                }
            });
        });
    </script>

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

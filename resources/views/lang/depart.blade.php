<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="{{ asset('/scss/universities.css') }}">
    <link rel="stylesheet" href="/scss/table-test.css">

    @extends('layouts.head-en')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- start box icon -->


    <link rel="stylesheet" href="/scss/researchers.css">


    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />


    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <title>Document</title>
</head>

<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="/icons/Untitled-1.png" alt=""
                class="img-fluid"></a>

            <header id="header" class="fixed-top">
                <div class="container d-flex align-items-center justify-content-between">

                    <a href="index.html" class="logo"><img src="./icons/Untitled-1.png" alt=""
                            class="img-fluid"></a>
                    <!-- Uncomment below if you prefer to use text as a logo -->
                    <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

                    <nav id="navbar" class="navbar">
                        <ul><li><a href="/login"> login</a></li>
                        </ul>
                        <ul>
                            <li class="dropdown"><a href="/en"><span>Home</span> <i
                                        class="bi bi-chevron-down"></i></a>
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

                            <li><a class="nav-link scrollto" href="/facutlyresearchen">Achievements</a></li>



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
                            <li><a href="/labexamfacen">lab Exam Table </a></li>
                        </ul>
                    </li>

                            <li><a class="nav-link scrollto" href="/magazinen">Magazin </a></li>
                            <li><a class="nav-link scrollto" href="/papersen">Cellender </a></li>
                            <li><a class="nav-link scrollto" href="/centersen">English Center </a></li>

                            <li><a id="lang" class="nav-link scrollto" href="/">en </a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
                    </nav><!-- .navbar -->

                </div>
        </div>
    </header><!-- End Header -->
    <!-- end navbar -->



    <center>
        <ul class="nav justify-content-center child">

            <li class="nav-item">
                <a class="nav-link" href="/d/{{ $department['id'] }}">Lectures</a>
            </li>
        </ul>
    </center>

    <div class="header">
        <div class="content">
            <div class="row justify-content-around">
                <div class="col-md-5 text-left">
                    <h1 class="heading mt-4">{{ $department['name_en'] }} </h1>
                    <!-- <span class="btn">descover</span> -->
                </div>
                <div class="col-md-5">
                    <img src="/{{ $department['image'] }}" alt="">
                </div>
            </div>
        </div>

        <div class="overlay"></div>
    </div>


    <!-- end header -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-9 section-bg">
        <div class="container mt-3">
            <div class="row ">
                @foreach ($doctors as $doctor)
                    @if ($doctor->id_department == $department->id)
                        <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">

                                    <img src="/{{ $doctor['image'] }}" class="img-fluid imgs" alt="">
                                    <div class="social">
                                        @foreach ($socials as $social)
                                            @if ($social->id_doctor == $doctor->id)
                                                <a href="{{ $social['link'] }}">{{ $social['name_en'] }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>ر</h4>
                                    <span>{{ $doctor['details_en'] }} </span>
                                    <a class="btn shadow-sm btn-dark" href="/doc/{{ $doctor->id }}/show">Visit
                                        </a>


                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>



        </div>
    </section><!-- End Team Section -->




    <!-- start  section 2 -->
    <section class="section-2 ">
        <div class="container">
            <div class="head text-center">
                <!-- <small>this is small</small> -->
            </div>
            <div class="row">

                <div class="col-md-3">

                    <div class="count">{{ $labs->count() }}</div>
                    <br>
                    <p>Labs </p>
                </div>

                <div class="col-md-3">

                    <div class="count">{{ $doctors->count() }}</div>

                    <br>
                    <p> Professor </p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $achievements->count() }}</div>

                    <br>
                    <p>Achievements </p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $activities->count() }}</div>

                    <br>
                    <p> Activity  </p>
                </div>

            </div>
        </div>
    </section>


    <!-- End  section 2 -->

    <!-- start section 6 -->


    <!-- End section 6 -->



    <!-- start section 3 -->
    <section class="section-3  bg-light">
        <div class="container">
            <div class="caption ">
                <h1 class="text-center">
                    Activities
                </h1>
            </div>
            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
@foreach ($activities as $act)
@if($act->id_faculty==$department->id_facutly)

                <div>
                    <div class="card ">
                        <img src="/{{ $act->image }}" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">

                        <h4>{{ $act->name_en }}</h4>
@foreach ($doctors as $doc)
    @if($act->id_doctor==$doc->id)
    <h4>{{ $doc->name_en }}</h4>
    @endif
@endforeach

                        <p style="font-weight: bold;" class="second">{{$act->detaila_en}}</p>
                        <a  class="btn main m-auto "href="/Faculty/{{ $act->id }}/research">التفاصيل</a>
                    </div>
                </div>
                @endif
                @endforeach

            </div>

        </div>


    </section>
    <!-- end section 3 -->





    <!-- end section 4 -->

    <!-- start seection 6 -->
    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers ">
        <div class="container" data-aos="fade-up">
            <hr>
            <h2 class="text-center my-3">First Students </h2>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach($students as $st)
                @if($st->id_facutly==$department->id_facutly)
                <div class="col-lg-4  col-md-6 d-flex align-items-stretch">

                    <div class="member">
                        <img src="/{{ $st->image }}" class="img-fluid" alt="">
                        <div class="member-content">
                            <h1 class="inside">{{ $st->grade_en }}</h1>

                            <h4>{{ $st->name_en }}</h4>
                            <span class="badge d-inline-block badge-secondary p-3">{{ $st->level_en }}</span>

                        </div>
                    </div>
                </div>
                @endif
@endforeach


            </div>

        </div>
    </section><!-- End Trainers Section -->

    <!-- start seection 6 -->


    <!-- start seection 6 -->






    <!-- start section 3 -->
    <section class="section-3  bg-light">
        <div class="container">
            <div class="caption ">
                <h1 class="text-center my-3">
                    Labs
                </h1>
            </div>
            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
            @foreach($labs as $lab)
            @if($lab->id_faculty==$department->id_facutly)


                <div>
                    <div class="card ">
                        <img src="/{{ $lab->image }}" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">

                        <h4 class="">{{ $lab->name_en }}</h4>

                        <p style="font-weight: bold;" class="second ">{{$lab->details_en}}.</p>
                        <a href="/lab/{{ $lab->id }}/show" class="btn main m-auto ">Details</a>
                    </div>
                </div>

                @endif
@endforeach

            </div>

        </div>

    </section>


    @extends('layouts.footer-en')


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



    <!-- start section -->
    <script src="/js/main.js"></script>
    <script src="/js/dark.js"></script>
    <script src="/js/nav.js"></script>


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
        //Animation
        //Menu On Hover
        $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
            if ($(window).width() > 750) {
                var _d = $(e.target).closest('.nav-item');
                _d.addClass('show');
                setTimeout(function() {
                    _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
                }, 1);
            }
        });
        //Switch light/dark
        // END NAVBAR

        $('.center').slick({
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            autoplay: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    <script>
        $('.section-3 .responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script>
        $(document).ready(function() {
            $(dark).on('click', function() {
                $('body').toggleClass('dark');
                $('.trainers').toggleClass('dark');
                $('.section-2').toggleClass('dark');
                $('.section-2').toggleClass('');
                $('.section-3').toggleClass('dark');
                $('.section-4').toggleClass('dark');
                $('.section-5').toggleClass('dark');
                $('.section-6').toggleClass('dark');
                $('.section-7').toggleClass('dark');
                $('.section-8').toggleClass('dark');
                $('footer').toggleClass('dark');

            })
        });
    </script>

    <script>
        var bool = true;

        $(document).ready(function() {
            $('#lang').on('click', function() {

                if (bool == true) {
                    $("header").removeAttr("dir", "ltr");
                    $("header").attr("dir", "rtl");

                    $('.section-1').removeClass('text-left')
                    $('.section-1').addClass('text-right')

                    $('.section-2').removeClass('text-left')
                    $('.section-2').addClass('text-right')

                    $('.section-3').removeClass('text-left')
                    $('.section-3').addClass('text-right')

                    $('.section-4').removeClass('text-left')
                    $('.section-4').addClass('text-right')

                    $('.section-5').removeClass('text-left')
                    $('.section-5').addClass('text-right')

                    $('.section-6').removeClass('text-left')
                    $('.section-6').addClass('text-right')

                    $('.section-7').removeClass('text-left')
                    $('.section-7').addClass('text-right')

                    $('.section-8').removeClass('text-left')
                    $('.section-8').addClass('text-right')
                    $(".section-8").removeAttr("dir", "ltr");
                    $(".section-8").attr("dir", "rtl");

                    $('.section-9').removeClass('text-left')
                    $('.section-9').addClass('text-right')
                    bool = false;
                } else if (bool == false) {
                    $("header").removeAttr("dir");
                    $("header").attr("dir", "ltr");

                    $('.section-1').removeClass('text-right')
                    $('.section-1').addClass('text-left')

                    $('.section-2').removeClass('text-right')
                    $('.section-2').addClass('text-left')

                    $('.section-3').removeClass('text-right')
                    $('.section-3').addClass('text-left')

                    $('.section-4').removeClass('text-right')
                    $('.section-4').addClass('text-left')

                    $('.section-5').removeClass('text-right')
                    $('.section-5').addClass('text-left')

                    $('.section-6').removeClass('text-right')
                    $('.section-6').addClass('text-left')

                    $('.section-7').removeClass('text-right')
                    $('.section-7').addClass('text-left')

                    $('.section-8').removeClass('text-right')
                    $('.section-8').addClass('text-left')

                    $(".section-8").removeAttr("dir");
                    $(".section-8").attr("dir", "ltr");

                    $('.section-9').removeClass('text-right')
                    $('.section-9').addClass('text-left')
                    bool = true;
                }

            })
        })
    </script>

</body>

</html>

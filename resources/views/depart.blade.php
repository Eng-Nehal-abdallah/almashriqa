<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="{{ asset('/scss/universities.css') }}">

    @extends('layouts.head-ar')




    <style>
        body.dark {
            background-color: rgb(0, 0, 0);
            color: #fff;
        }

        img {
            width: 100%
        }

    </style>
    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <title>Document</title>
</head>

<body>


    <!-- start navbar -->
    <header id="header" dir="rtl" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="/icons/Untitled-1.png" alt=""
                    class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">

                <ul>
                    @guest

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                            </li>
                            {{-- <li><a href="/login"> تسجيل الدخول </a></li> --}}
                        @endif
                    @else
                        {{-- <li><a href="/logout"> تسجيل الخروج </a></li> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('تسجيل الخروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    @endguest
                    <li class="dropdown"><a href="/"><span>الرئيسية</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/about">عن الجامعة</a></li>
                            <li><a href="/leaderuni">رئاسة الجامعة</a></li>
                            <li><a href="/fees">الرسوم الدراسية </a></li>
                            <li><a href="/strategy">ستراتيجية الجامعة </a></li>
                            <li><a href="/facutlydoc">االهيئه التدريسيه</a></li>
                            <li><a href="/agreements">الاتفاقيات ومذكرات التفاهم</a></li>

                            <li><a href="/leaderword">كلمة رئيس الجامعة</a></li>
                            <li><a href="/facutlylab">المختبرات</a></li>
                            <li><a href="/facutlyresearch">الانجازات </a></li>
                            <li><a href="/compuss">الحرم الجامعي</a></li>
                            <li><a class="nav-link scrollto" href="/chart">الاحصائيات </a></li>

                            {{-- <li><a href="/papers">االتقويم الجامعي</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreements"><span>الية التسجيل و القبول</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/agreements">الية التسجيل</a></li>
                            <li><a href="/accept">شروط القبول</a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">استمارة التسجيل</a></li>

                        </ul>
                    </li>




                    <li class="dropdown"><a href="#"><span>كليات</span> <i class="bi bi-chevron-down"></i></a>


                        <ul>
                            @foreach ($faculties as $f)
                                <li class="dropdown"><a href="/Facutly/{{ $f->id }}/show"><span>
                                            {{ $f->name_ar }}</span> <i class="bi bi-chevron-right"></i></a>
                                    @foreach ($departments as $depart)
                                        @if ($depart->id_facutly == $f->id)
                                            <ul>
                                                <li><a
                                                        href="/department/{{ $depart->id }}/show">{{ $depart->name_ar }}</a>
                                                </li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/labexamfac"><span>التعليم الالكتروني</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/facutlylec">جدول المحاضرات الحضورية</a></li>
                            <li><a href="/facutlyexam">جدول الامتحانات الالكترونية</a></li>

                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="/magazin">مجلة الجامعة</a></li>
                    <li><a class="nav-link scrollto" href="/papers">التقويم الاكاديمي </a></li>
                    <li><a class="nav-link scrollto" href="/centers">مركز اللغة الانجليزية</a></li>

                    <li><a class="nav-link scrollto" href="/en">EN </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- end navbar -->

    <center>
        <ul class="nav justify-content-center child">

            <li class="nav-item">
                <a class="nav-link" href="/d/{{ $department['id'] }}">المحاضرات</a>
            </li>
        </ul>
    </center>

    <div class="header">
        <div class="content">
            <div class="row justify-content-around">
                <div class="col-md-5 text-left">
                    <h1 class="heading mt-4">{{ $department['name_ar'] }} </h1>
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
                                                <a href="{{ $social['link'] }}">{{ $social['name_ar'] }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>ر</h4>
                                    <span>{{ $doctor['details_ar'] }} </span>
                                    <a class="btn shadow-sm btn-dark" href="/doc/{{ $doctor->id }}/show">زياره الملف
                                        الشخصي
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
                    <p>المختبرات </p>
                </div>

                <div class="col-md-3">

                    <div class="count">{{ $doctors->count() }}</div>

                    <br>
                    <p> الكادر التدريسبي </p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $achievements->count() }}</div>

                    <br>
                    <p>الانجازات </p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $activities->count() }}</div>

                    <br>
                    <p> الانشطه </p>
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
                    انشطه الكليه
                </h1>
            </div>
            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                @foreach ($activities as $act)
                    @if ($act->id_faculty == $department->id_facutly)
                        <div>
                            <div class="card ">
                                <img src="/{{ $act->image }}" class="card-img" alt="...">
                            </div>
                            <div class="card p-3 ">

                                <h4>{{ $act->name_ar }}</h4>
                                @foreach ($doctors as $doc)
                                    @if ($act->id_doctor == $doc->id)
                                        <h4>{{ $doc->name_ar }}</h4>
                                    @endif
                                @endforeach

                                <p style="font-weight: bold;" class="second">{{ $act->detaila_ar }}</p>
                                <a class="btn main m-auto " href="/Faculty/{{ $act->id }}/research">التفاصيل</a>
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
            <h2 class="text-center my-3">الطلاب الاوائل </h2>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($students as $st)
                    @if ($st->id_facutly == $department->id_facutly)
                        <div class="col-lg-4  col-md-6 d-flex align-items-stretch">

                            <div class="member">
                                <img src="/{{ $st->image }}" class="img-fluid" alt="">
                                <div class="member-content">
                                    <h1 class="inside">{{ $st->grade_ar }}</h1>

                                    <h4>{{ $st->name_ar }}</h4>
                                    <span class="badge d-inline-block badge-secondary p-3">{{ $st->level_ar }}</span>

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
                    المعامل
                </h1>
            </div>
            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                @foreach ($labs as $lab)
                    @if ($lab->id_faculty == $department->id_facutly)
                        <div>
                            <div class="card ">
                                <img src="/{{ $lab->image }}" class="card-img" alt="...">
                            </div>
                            <div class="card p-3 ">

                                <h4 class="">{{ $lab->name_ar }}</h4>

                                <p style="font-weight: bold;" class="second ">{{ $lab->details_ar }}.</p>
                                <a href="/lab/{{ $lab->id }}/show" class="btn main m-auto ">التفاصيل</a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>

    </section>


    @extends('layouts.footer-ar')


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

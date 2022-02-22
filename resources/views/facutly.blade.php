<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    @extends('layouts.head-ar')

    <link rel="stylesheet" href="{{ asset('/scss/universities.css') }}">
    <link rel="stylesheet" href="/scss/dark&light.css">




    <!-- start wol js --/agreement
 <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <title>Document</title>
</head>

<body class="text-right">
    <!-- start navbar -->
    <header dir="rtl" id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="/icons/Untitled-1.png" alt=""
                    class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/login"> تسجيل الدخول </a></li>
                </ul>
                <ul>
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
                            <li><a href="/labexamfac">جدول الامتحانات العملي الالكترونية</a></li>
                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="/magazin">مجلة الجامعة</a></li>
                    <li><a class="nav-link scrollto" href="/papers">التقويم الاكاديمي </a></li>
                    <li><a class="nav-link scrollto" href="/centers">مركز اللغة الانجليزية</a></li>

                    <li><a class="nav-link scrollto" href="/en">اللغة </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- end navbar -->



    <ul class="nav justify-content-center child">

        <li class="nav-item">
            <a class="nav-link" href="/s/{{ $facutly['id'] }}">المحاضرات</a>
        </li>
    </ul>

    <div class="header">
        <div class="content">
            <div class="row justify-content-around">
                <div class="col-md-5 text-left">
                    <h1 class="heading mt-4">{{ $facutly['name_ar'] }} </h1>
                    <!-- <span class="btn">descover</span> -->
                </div>
                <div class="col-md-5">
                    <img src="{{ $facutly['image'] }}" alt="">
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

    <!-- start section 6 -->
    <section class="section-6 my-4 " dir="rtl">
        <div class="container">
            <div class="alert text-center alert-light">
                <h5>عميد الكلية</h5>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <img src="/imgs/header.png" alt="">
                </div>
                <div class="col-md-5 ">
                    <h2>كلمة العميد</h2>
                    <p> {{ $facutly['message_dean_ar'] }} </p>

                </div>
            </div>
        </div>
    </section>

    <!-- End section 6 -->

    <div class="container">
        <hr>

    </div>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-9 section-bg">
        <div class="container mt-3">
            <div class="row ">
                @foreach ($doctors as $doctor)
                    @if ($doctor->id_facutly == $facutly->id)
                        <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">

                                    <img src="/{{ $doctor->image }}" class="img-fluid imgs" alt="">
                                    <div class="social">
                                        @foreach ($socials as $social)
                                            @if ($social->id_doctor == $doctor->id)
                                                <a href="{{ $social['link'] }}">{{ $social['name_ar'] }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $doctor['name_ar'] }} </h4>
                                    <span>{{ $doctor->private_specific_ar }}/{{ $doctor['public_specific_ar'] }}
                                    </span>
                                    <br><br>
                                    <a class="btn shadow-sm btn-dark" href="/doc/{{ $doctor->id }}/show">زيارة الملف
                                        الشخصي</a>


                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>



        </div>
    </section><!-- End Team Section -->


    <!-- start section 5 -->
    <section class="section-5 text-right" dir="rtl">
        <div class="container">
            <div class="row ">

                <div class="col-md-4">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2 class="my-4">الرؤية</h2>
                        <hr>
                    </div>
                    <p>
                        {{ $facutly['view_ar'] }}</p>

                </div>

                <div class="col-md-4">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2 class="my-4">الرسالة </h2>
                        <hr>
                    </div>
                    <p> {{ $facutly['message_ar'] }}</p>

                </div>
                <div class="col-md-4">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2 class="my-4">الاهداف</h2>
                        <hr>
                    </div>
                    <ul>
                        <li> {{ $facutly['goal_ar'] }}</li>
                    </ul>

                </div>

            </div>
            <hr>


        </div>
    </section>
    <!-- end section 5 -->



    {{-- start abojut secction --}}
    <section class="section-about">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8">
                    <div class="card border-dark mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body text-dark">
                            <h5 class="card-title">Dark card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    {{-- end about seection --}}

    <!-- start section 3 -->
    <section class="section-3  bg-light">
        <div class="container">
            <div class="caption ">
                <h1 class="text-center">
                    نشاطات الكلية
                </h1>
            </div>
            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                @foreach ($activities as $act)
                    @if ($act->id_faculty == $facutly->id)
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
            <h2 class="text-center my-3">الطلبة الاوائل</h2>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($students as $st)
                    @if ($st->id_facutly == $facutly->id)
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

    <!-- start section 3 -->
    <section class="section-3  bg-light">
        <div class="container">
            <div class="caption ">
                <h1 class="text-center my-3">
                    المختبرات
                </h1>
            </div>
            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                @foreach ($labs as $lab)
                    @if ($lab->id_faculty == $facutly->id)
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
    <!-- end section 3 -->

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
                    <p>عدد المختبرات</p>
                </div>

                <div class="col-md-3">

                    <div class="count">{{ $doctors->count() }}</div>

                    <br>
                    <p> الكادر التدريسي</p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $achieve->count() }}</div>

                    <br>
                    <p>عدد الانجازات</p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $activities->count() }}</div>

                    <br>
                    <p> عدد الانشطه </p>
                </div>

            </div>
        </div>
    </section>


    <!-- End  section 2 -->

    <!-- start sectoin 7 -->
    <section class="section-7 ">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5 ">
                    <h2>اقسام الكلية</h2>
                    <p>
                        {{ $facutly->details_ar }}
                    </p>
                    <div class="dropdown float-right">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-expanded="false">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($departments as $department)
                                @if ($department->id_facutly == $facutly->id)
                                    <a class="dropdown-item"
                                        href="/department/{{ $department->id }}/show">{{ $department->name_ar }}</a>
                                @endif
                            @endforeach

                        </div>




                    </div>
                </div>
                <div class="col-md-5">
                    <img class="main" src="/{{ $facutly->image }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- start seection 6 -->


    <!-- start footer -->
    @extends('layouts.footer-ar')



    <!-- start jquery -->
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
        var dark = document.querySelector('.dark-mood > .fas');


        $(document).ready(function() {
            $(dark).on('click', function() {
                $('body').toggleClass('dark');
                $('.section-1').toggleClass('dark');
                $('.section-2').toggleClass('dark');
                $('.section-2').toggleClass('text-right');
                $('.section-3').toggleClass('dark');
                $('.section-4').toggleClass('dark');
                $('.section-5').toggleClass('dark');
                $('.section-6').toggleClass('dark');
                $('.section-7').toggleClass('dark');
                $('.section-8').toggleClass('dark');
                $('.btn-outline-dark').toggleClass('btn-outline-light')
                $('footer').toggleClass('dark');

            })
        });
    </script>



</body>

</html>

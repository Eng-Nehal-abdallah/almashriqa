<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" href="/scss/style.css">
    @extends('layouts.head-ar')


    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>

<body class="text-right">
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
                            <li><a href="/labexamfac">جدول الامتحانات العملي الالكترونية</a></li>
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



    <!-- start header -->
    <div class="header">
        <div class="caption">
            <h1 class="heading"> جامعة المشرق</h1>
            <!-- <h5></h5> -->
            <!-- <span class="btn">descover</span> -->

        </div>
        <div class="overlay"></div>



    </div>
    <!-- end header -->


    <!-- start after head -->

    <div class="after-head">
        <h1 class="">{{ $mash->abstract_title_ar }}</h1>
        <br>


        <p>{{ $mash->abstract_details_ar }}
        </p>

    </div>

    <!-- end after head -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->


    <!-- start section 1 -->
    <section class="section-1 ">
        <div class="row justify-content-around justify-content-md-center text-center justify-content-sm-center">

            @foreach ($fs as $f)
                <div class="col-md-3">
                    <img src="/icons/Group-62.png" alt="">
                    <h2> {{ $f->name_ar }}</h2>

                    <p>{{ $f->about_facutly_ar }}
                    </p>
                </div>
            @endforeach
            {{-- <div class="col-md-3">
    <img src="./icons/Group-63.png" alt="">
    <h2> القانون</h2>
    <small>كلية</small>
    <p>كلية القانون واحدة من كليات جامعة المشرق. يؤكد ملاكها التدريسي باستمرار دعمه وتقديمه للكلية أفضل إمكانياته
     العلمية
     والتعليمية، التي تساهم فـــي ترسيخ حكم القانون،
    </p>
   </div>
  </div>

 <!-- end section 1 --> --}}
    </section>
    <!-- start section 2 -->

    <section class="section-2 ">
        <div class="container-fluid">
            <div class="row justify-content-around">

                <div class="col-md-5 col-sm-10">
                    <img src="{{ $mash->image1 }}" alt="">
                </div>

                <div class="col-md-5 col-sm-10">
                    <div class="caption">
                        <small>جامعة </small>
                        <h1 class="heading">{{ $mash->title_image1_ar }}</h1>
                        <p class="">{{ $mash->details_image1_ar }} </p>


                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- End section 2 -->


    <!-- start section 3 -->
    <section class="section-3 my-5">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>
                        <br>
                        <span class="num" data-goal="100">{{ $faculties->count() }}</span>
                        <p>الكليات</p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-5 col-6">

                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>
                        <span class="num" data-goal="100">{{ $achievements->count() }}</span>
                        <p> الابحاث</p>
                    </div>

                </div>

                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $doctors->count() }}</span>

                        <p>الكادر التدريسي</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $labs->count() }}</span>

                        <p> المعامل</p>
                    </div>

                </div>

                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $mash->room }}</span>

                        <p> القاعات التدريسية</p>
                    </div>

                </div>

                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $mash->students }}</span>

                        <p> الطلاب</p>
                    </div>

                </div>



            </div>
        </div>
    </section>
    <!-- End section 3 -->


    <!-- start section 4 -->
    <section class="section-4 ">
        <div class="container-fluid">
            <div class="row justify-content-around">

                <div class="col-md-5 col-sm-10">
                    <h1 class="heading ">{{ $mash->title_image2_ar }}</h1>
                    <p class="">{{ $mash->details_image2_ar }}</p>

                </div>


                <div class="col-md-5 col-sm-10">
                    <img src="{{ $mash->image2 }}" alt="">
                </div>

            </div>
        </div>

    </section>


    <!-- end section 4 -->

    <!-- start section 5 -->
    <section class="section-5 ">
        <div class="container container-md">
            <div class="caption text-center">
                <h1 class="heading">
                    انشطة الجامعة
                </h1>

            </div>

            <div class="responsive">
                @foreach ($activities as $act)
                    <div>
                        <div class="card">

                            <img src="{{ $act->image }}" class="card-img" alt="...">

                        </div>
                        <div class="card p-3 ">
                            <h3 class="">{{ $act->name_ar }}</h3>
                            @foreach ($doctors as $doct)
                                @if ($doct->id == $act->id_doctor)
                                    <small class="">{{ $doct->name_ar }} </small>
                                @endif
                            @endforeach
                            <p class="second">
                                {{ $act->details_ar }}
                                <br>
                            </p>
                            <a href="/activityen/{{ $act->id }}/show" class="btn btn-warning main">التفاصيل</a>

                            <!-- <div class="d-flex">
             <img class="second pr-1" src="./person/Ellipse 38.png" alt="">
             <small class="text-capitalize">name of person</small>
            </div> -->
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end section 5 -->


    <!-- start section 6 -->
    <section class="section-6  text-center">

        <div class="container">
            <h1 class="heading"> {{ $mash->option1_title_ar }}</h1>

            <div class="row">
                <div class="col-md-12">
                    <p>
                        {{ $mash->option1_details_ar }}</h1>

                    </p>

                </div>
            </div>

    </section>

    <!-- end section 6 -->



    <!-- start section 7 -->
    <section class="section-7 ">
        <div class="container">
            <h1 class="heading text-center">
                الانجازات
            </h1>
            <!-- <h5 class="my-3">اَخر البحوث</h5> -->
            <div class="container">
                <div class="caption text-center">

                </div>

                <div class="center">
                    @foreach ($achievements as $act)
                        <div>



                            <div class="card">

                                <img src="{{ $act->image }}" class="card-img" alt="...">

                            </div>
                            <div class="card p-3 ">
                                <h3 class="">{{ $act->name_ar }}</h3>
                                @foreach ($doctors as $doct)
                                    @if ($doct->id == $act->id_doctor)
                                        <small class="">{{ $doct->name_ar }} </small>
                                    @endif
                                @endforeach
                                <p class="second">
                                    {{ $act->details_ar }}
                                    <br>
                                </p>
                                <a href="/ach/{{ $act->id }}/show" class="btn btn-warning main">Details</a>

                                <!-- <div class="d-flex">
                                <img class="second pr-1" src="./person/Ellipse 38.png" alt="">
                                <small class="text-capitalize">name of person</small>
                                </div> -->
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>


    </section>

    <!-- end section 7 -->



    <!-- start section 8 -->
    <section class="section-8 ">
        <div class="container-fluid">

            <h2 class="text-center">عن الجامعة</h2>



            <div class="center">

                <div class="img-content">
                    <img src="{{ asset('imgs/header.png') }}" alt="">

                    <div class="inner">
                        <a href="#">visit</a>
                    </div>

                </div>

                <div class="img-content">

                    <img src="{{ asset('imgs/header.png') }}" alt="">

                    <div class="inner">
                        <a href="#">visit</a>
                    </div>
                </div>


                <div class="img-content">

                    <img src="{{ asset('imgs/header.png') }}" alt="">

                    <div class="inner">
                        <a href="#">visit</a>
                    </div>
                </div>


                <div class="img-content">

                    <img src="{{ asset('imgs/header.png') }}" alt="">

                    <div class="inner">
                        <a href="#">visit</a>
                    </div>
                </div>

                <div class="img-content">

                    <img src="{{ asset('imgs/header.png') }}" alt="">

                    <div class="inner">
                        <a href="#">visit</a>
                    </div>
                </div>


            </div>




        </div>
    </section>

    <!-- end section 8 -->


    <!--start footer -->
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

        $('.section-8 .center').slick({
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            autoplay: true,
            responsive: [{
                    breakpoint: 1080,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },

                {
                    breakpoint: 768,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '10px',
                        slidesToShow: 2
                    }
                },

                {
                    breakpoint: 560,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '10px',
                        slidesToShow: 1
                    }
                }
            ]
        });

        $('.section-7 .center').slick({
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            autoplay: true,
            responsive: [{
                    breakpoint: 900,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },

                {
                    breakpoint: 518,
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
        $('.section-5 .responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
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
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2

                    }
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false

                    }
                }

            ]
        });
    </script>


    <script>
        var bool = true;

        $(document).ready(function() {
            $('#lang').on('click', function() {

                if (bool == true) {
                    $("header").removeAttr("dir", "ltr");




                    $('.section-1').removeClass('text-left')
                    $('.section-1').addClass('text-right')


                    $('.section-2').removeClass('text-left')
                    $('.section-2').addClass('text-right')

                    $('.section-4').removeClass('text-left')
                    $('.section-4').addClass('text-right')

                    $('.section-5').removeClass('text-left')
                    $('.section-5').addClass('text-right')


                    $('.section-7').removeClass('text-left')
                    $('.section-7').addClass('text-right')

                    $('footer').removeClass('text-left')
                    $('footer').addClass('text-right')

                    bool = false;
                } else if (bool == false) {
                    $("header").removeAttr("dir");
                    $("header").attr("dir", "ltr");


                    $('.section-2').removeClass('text-right')
                    $('.section-2').addClass('text-left')

                    $('.section-4').removeClass('text-right')
                    $('.section-4').addClass('text-left')

                    $('.section-5').removeClass('text-right')
                    $('.section-5').addClass('text-left')


                    $('.section-7').removeClass('text-right')
                    $('.section-7').addClass('text-left')

                    $('footer').removeClass('text-right')
                    $('footer').addClass('text-left')
                    bool = true;
                }

            })
        })
    </script>
    {{-- <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script> --}}


</body>

</html>

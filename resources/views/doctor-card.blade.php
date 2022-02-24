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
    <link href='/scss/UniLeader.css' rel='stylesheet'>
    <!--start fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


    <link rel="stylesheet" href="/scss/doctor-card.css">

    @extends('layouts.head-ar')

    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
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
                            <li><a href="/facutly">االهيئه التدريسيه</a></li>
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


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->
    <!-- start header -->




    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-2">
        <div class="container">
            <h1 class="text-center my-5">رئاسة الجامعة</h1>
            <div class="row text-right">

                <div class="col-lg-4 col-sm-12 col-md-5 col-sm-10 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-5 col-sm-10 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ا.م.د درع احمد سميط</h4>
                            <span>معاون رئيس الجامعة للشؤون العلمية</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-5 col-sm-10 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>أ.د سالم سليمان محمد</h4>
                            <span>معاون رئيس الجامعة للشؤون الادارية</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>
                        </div>
                    </div>
                </div>


            </div>
            <h1 class="text-center my-5">عمداء الجامعة</h1>

            <div class="row text-right">
                <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ا.د رجاء هادي عباس درويش</h4>
                            <span>عميد كلية طب الاسنان</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>ا.د ليث حمزة سمين</h4>
                            <span>عميد كلية الصيدلة</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>أ.م.د علي غني عباس</h4>
                            <span>عميد كلية القانون</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>أ.م.د طالب عبد صالح ناصر</h4>
                            <span>عميد كلية العلوم الادارية</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                    <div class="member">
                        <div class="member-img">
                            <img src="./imgs/12.jpg" class="img-fluid imgs" alt="">
                            <div class="social">
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                                <a href="">ss</a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>أ.م.د سنان صبحي فرحان</h4>
                            <span>عميد كلية تقنيات والعلوم الطبية</span>
                            <a href="#" class="btn btn-dark my-3 ">زيارة الملف الشخصي</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Team Section -->








    <!--start footer -->

    @extends('layouts.footer-ar')

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

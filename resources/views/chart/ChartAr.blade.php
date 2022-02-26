<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>charts</title>
    <link rel="stylesheet" href="{{ asset('css/chart/Chart.css') }}" />
    @extends('layouts.head-ar')
</head>

<body>

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
                            <li><a href="/facutlyresearch">الابحاث </a></li>
                            <li><a href="/compuss">الحرم الجامعي</a></li>
                            <li><a class="nav-link scrollto" href="/chart">الاحصائيات </a></li>

                            {{-- <li><a href="/papers">االتقويم الجامعي</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreements"><span>الية التسجيل و القبول</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/mechine">الية التسجيل</a></li>
                            <li><a href="/accept">شروط القبول</a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">استمارة التسجيل</a></li>

                        </ul>
                    </li>




                    <li class="dropdown"><a href="#"><span>كليات</span> <i class="bi bi-chevron-down"></i></a>


                        <ul>
                            @foreach ($faculties as $f)
                                <li class="dropdown"><a href="/Facutly/{{ $f->id }}/show"><span>
                                            {{ $f->name_ar }}</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        @foreach ($departments as $depart)
                                            @if ($depart->id_facutly == $f->id)
                                                <li>
                                                    <a
                                                        href="/department/{{ $depart->id }}/show">{{ $depart->name_ar }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
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

    <style>
        #chartdiv {
            width: 100%;
        }

    </style>


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->

    {{-- start chart --}}
    <br><br>
    <section class="section-1 overflow-scroll" dir="rtl">
        <div class="container-fluid my-1">

            <div class="card text-center">
                <div class="card-header">
                    احصائيات عام 2021-2022
                </div>


                <div style="min-width: 500px;" class="overflow-scroll" id="chartdiv">
                </div>


                <div class="row justify-content-center justify-content-sm-center">

                    <div class="caption one col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>43</h5>
                            <p class="cold-flex p-1">عدد
                            </p>
                            <h4 class="m-2 p-2">الابحاث</h4>
                        </div>
                    </div>

                    <div class="caption tow col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>4000</h5>
                            <p class="cold-flex p-1">عدد
                            </p>
                            <h4 class="m-2 p-2">الطلبة</h4>
                        </div>
                    </div>

                    <div class="caption three col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>34</h5>
                            <p class="cold-flex p-1">عدد
                            </p>
                            <h4 class="m-2 p-2">الكادر التدريسي</h4>
                        </div>
                    </div>

                    <div class="caption four col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>5</h5>
                            <p class="cold-flex p-1">عدد
                            </p>
                            <h4 class="m-2 p-2">الكليات</h4>
                        </div>
                    </div>


                </div>

                <div class="card-footer text-muted">
                    Almashriq
                </div>
            </div>

        </div>
    </section>
    {{-- end chart --}}

    <style>
        @media(max-width:500px) {

            canvas,
            #chartdiv {
                width: 400px !important;
                height: 380px !important;
                margin: 0 !important;
                padding: 0 !important;
                right: 5%;
            }
        }

    </style>




    <!--start footer -->

    @extends('layouts.footer-ar')

    <!-- start jquery -->
    <script src="{{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/slick.min.js') }}"></script>



    <!-- start section -->
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/dark.js') }}"></script>
    <script src="{{ asset('/js/nav.js') }}"></script>


    <script src="{{ asset('js/chart/main.js') }}"></script>
    <script src="{{ asset('js/chart/percent.js') }}"></script>
    <script src="{{ asset('js/chart/Animated.js') }}"></script>
    <script src="{{ asset('js/indexAr.js') }}"></script>
</body>

</html>

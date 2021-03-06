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


    <link rel="stylesheet" href="/scss/researchers-inner.css">
    @extends('layouts.head-ar')


    <!-- start box icon -->
    <link href='/css/boxicons.min.css' rel='stylesheet'>
    <!--start fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/navbar.css">

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

            <a href="/" class="logo"><img src="/icons/Untitled-1.png" alt="" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="/">Butterfly</a></h1> -->

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

    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->





    <!-- start section 1 -->
    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio section-1 portfolio-area area-padding fix">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="head ">
                        <h2 class="heading">كل الانجازات</h2>
                        <small>{{ $department->name_ar }}</small>

                    </div>
                </div>
            </div>
            <div class="row awesome-project-content portfolio-container">
                @foreach ($achievements as $ach)
                    @if ($ach->id_department == $department->id)
                        <!-- portfolio-item start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="/{{ $ach->image }}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="portfolio-lightbox" data-gallery="myGallery"
                                                href="/ach/{{ $ach->id }}/show">
                                                <h4>{{ $ach->name_ar }}</h4>
                                                @foreach ($types as $type)
                                                    @if ($type->id == $ach->id_types)
                                                        <span>{{ $type->name_ar }}</span>
                                                    @endif
                                                @endforeach
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- portfolio-item end -->
                    @endif
                @endforeach
                {{-- <!-- portfolio-item start -->
    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
     <div class="single-awesome-project">
      <div class="awesome-img">
       <a href="#"><img src="/imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="/imgs/header.png">
          <h4>Business City</h4>
          <span>Web Development</span>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- portfolio-item end -->

    <!-- portfolio-item start -->
    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
     <div class="single-awesome-project">
      <div class="awesome-img">
       <a href="#"><img src="/imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="/imgs/header.png">
          <h4>Business City</h4>
          <span>Web Development</span>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- portfolio-item end -->

    <!-- portfolio-item start -->
    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
     <div class="single-awesome-project">
      <div class="awesome-img">
       <a href="#"><img src="/imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="/imgs/header.png">
          <h4>Business City</h4>
          <span>Web Development</span>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- portfolio-item end -->

    <!-- portfolio-item start -->
    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
     <div class="single-awesome-project">
      <div class="awesome-img">
       <a href="#"><img src="/imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="/imgs/header.png">
          <h4>Business City</h4>
          <span>Web Development</span>
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!-- portfolio-item end --> --}}


            </div>
        </div>
    </div><!-- End Portfolio Section -->


    <!-- End section 1 -->




    <!-- end section 2 -->
    <!-- start footer -->
    @extends('layouts.footer-ar')


    <!-- start jquery -->
    <!-- start jquery -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>

    <!-- start section -->
    <script src="/js/main.js"></script>
    <script src="/js/dark.js"></script>
    <script src="/js/nav.js"></script>



    <script src="/js/nav2.js"></script>
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
                    bool = false;
                } else if (bool == false) {
                    $("header").removeAttr("dir");
                    $("header").attr("dir", "ltr");

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

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="{{ asset('css/patent.css') }}">
    @extends('layouts.head-ar')
    <link rel="stylesheet" href="{{ asset('scss/table-test.css') }}">



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

    <!-- end header -->

    <section class="section-2 my-5">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 text d-flex flex-column justify-content-center" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="content">
                        <h5>Who We Are</h5>
                        <h1 class="heading">
                            Some Text
                        </h1>
                        <p>
                            Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                            consequatur itaque ut
                            voluptate sed et. Magnam nam ipsu m tenetur suscipit voluptatum nam et est corrupti.
                        </p>
                        <div class="text-center text-lg-start">

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="./imgs/header.png" class="img-fluid rounded" alt="">
                </div>


            </div>
        </div>

    </section>
    <!-- start section 1 -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->



    <section class="section-1">
        <div class="container-fluid">
            <div class="head">
                <h1 class="heading">College</h1>
                <br>
                <small>small head</small>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde quam iure quae magni voluptatem
                    aliquam facilis
                    dignissimos? Soluta dolorem ex libero nobis sunt at, illo similique iste. Deleniti, dolores tempora!
                </p>
            </div>
            <div class="row">
                @foreach ($Facutlies as $Facutly)
                    <div class="col-md-6">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4 img-content">
                                    <img src="{{ $Facutly->image }}" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title heading">{{ $Facutly->name_ar }}</h5>

                                        <p class="card-text">{{ $Facutly->about_facutly_ar }}</p>
                                        <div class="btn-group">

                                            <button type="button"
                                                class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                                                data-toggle="dropdown" aria-expanded="false">
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button> <a class="dropdown-item"
                                                href="/patentshow/{{ $Facutly->id }}/show">{{ $Facutly->name_ar }}</a>
                                            <div class="dropdown-menu">
                                                @foreach ($departments as $department)
                                                    @if ($department->id_facutly == $Facutly->id)
                                                        <a class="dropdown-item"
                                                            href="/patent/{{ $department->id }}/show">{{ $department->name_ar }}</a>
                                                    @endif
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-md-6">
     <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
       <div class="col-md-4 img-content">
        <img src="./imgs/header.png" alt="...">
       </div>
       <div class="col-md-8">
        <div class="card-body">
         <h5 class="card-title heading">name of colleage</h5>
         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
          content.
          This content is a little bit longer.</p>
         <div class="btn-group">
          <button class="btn btn-sm" type="button">
           Small split button
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
           data-toggle="dropdown" aria-expanded="false">
           <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>

    <div class="col-md-6">
     <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
       <div class="col-md-4 img-content">
        <img src="./imgs/header.png" alt="...">
       </div>
       <div class="col-md-8">
        <div class="card-body">
         <h5 class="card-title heading">name of colleage</h5>
         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
          content.
          This content is a little bit longer.</p>
         <div class="btn-group">
          <button class="btn btn-sm" type="button">
           Small split button
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
           data-toggle="dropdown" aria-expanded="false">
           <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>


    <div class="col-md-6">
     <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
       <div class="col-md-4 img-content">
        <img src="./imgs/header.png" alt="...">
       </div>
       <div class="col-md-8">
        <div class="card-body">
         <h5 class="card-title heading">name of colleage</h5>
         <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
          content.
          This content is a little bit longer.</p>
         <div class="btn-group">
          <button class="btn btn-sm" type="button">
           Small split button
          </button>
          <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
           data-toggle="dropdown" aria-expanded="false">
           <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
           <a class="dropdown-item" href="#">Action</a>
           <a class="dropdown-item" href="#">Another action</a>
           <a class="dropdown-item" href="#">Something else here</a>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div> --}}
    </section>



    <!-- end section 2 -->
    <!--start footer -->
    @extends('layouts.footer-ar')



    <!-- start jquery -->
    <script src="/js/jquery-3.6.0.min.js"></script>
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
    <script src="{{ asset('js/nav.js') }}"></script>

    <script src="{{ asset('js/dark.js') }}"></script>


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
    </script>
</body>

</html>

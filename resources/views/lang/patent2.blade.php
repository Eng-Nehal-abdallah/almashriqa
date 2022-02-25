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

    <link rel="stylesheet" href="{{ asset('css/patent-inner2.css') }}">
    <link rel="stylesheet" href="{{ asset('scss/table-test.css') }}">

    @extends('layouts.head-en')


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

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>


                            @endguest
                            <li class="dropdown"><a href="/en"><span>Home</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="/abouten">About University</a></li>
                                    <li><a href="/leaderunien">University Presidency </a></li>
                                    <li><a href="/feesen">Tuition fees </a></li>
                                    <li><a href="/strategyen">University strategy </a></li>
                                    <li><a href="/facutlydocen">Doctors </a></li>
                                    <li><a href="/agreementsen">Agreements </a></li>

                                    <li><a href="/leaderworden">University President word</a></li>
                                    <li><a href="/facutlylaben">labs</a></li>
                                    <li><a href="/facutlyresearchen">achievements </a></li>
                                    <li><a href="/compusen">compus </a></li>
                                    <li><a href="/chartEn">statistics </a></li>

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


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->


    <!-- start section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="heading">{{ $research->name_en }}</h2>
                    <p>{{ $research->details_en }}</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ $research->image }}" alt="">
                </div>

            </div>
            <hr>

        </div>

    </section>



    <!-- End section 1 -->



    <!-- start section-2 -->
    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="head ">
                        <h2 class="heading"> PATENT</h2>
                        <small>small text</small>

                    </div>
                </div>
            </div>

            <div class="row awesome-project-content portfolio-container">
                @foreach ($achievements as $researchment)
                    <!-- portfolio-item start -->
                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#"><img src="{{ $researchment->image }}" alt="" /></a>
                                <div class="add-actions text-center">
                                    <div class="project-dec">
                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                            href="/patents/{{ $researchment->id }}/show">
                                            <h4>{{ $researchment->name_en }}</h4>
                                            <span>{{ $researchment->details_en }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- portfolio-item end -->
                @endforeach

                {{-- <!-- portfolio-item start -->
    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
     <div class="single-awesome-project">
      <div class="awesome-img">
       <a href="#"><img src="./imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="./imgs/header.png">
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
       <a href="#"><img src="./imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="./imgs/header.png">
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
       <a href="#"><img src="./imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="./imgs/header.png">
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
       <a href="#"><img src="./imgs/header.png" alt="" /></a>
       <div class="add-actions text-center">
        <div class="project-dec">
         <a class="portfolio-lightbox" data-gallery="myGallery" href="./imgs/header.png">
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


    <!-- End section-2 -->



    <!-- start footer -->
    @extends('layouts.footer-en')

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

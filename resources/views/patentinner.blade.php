<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="/scss/table-test.css">

    <link rel="stylesheet" href="{{ asset('css/patent-inner.css') }}">
    @extends('layouts.head-ar')

    <title>Document</title>
</head>

<body>

    <!-- start navbar -->
    <header dir="rtl" id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="/icons/Untitled-1.png" alt=""
                    class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul><li><a href="/login"> تسجيل الدخول </a></li>
                </ul>
                <ul>
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

                    <li><a class="nav-link scrollto" href="/facutlyresearch">البحوث</a></li>



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




    <!-- start header -->

    <header class="header">
        <div class="caption">
            <h1 id="h1" class="heading"></h1>
            <h5>University</h5>
            <span class="btn">descover</span>
        </div>

        <div class="overlay"></div>

    </header>


    <!-- end header -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->




    <!-- start section 1 -->
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
                    @if ($researchment->id_facutly == $facutly->id)
                        <!-- portfolio-item start -->
                        <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#"><img src="{{ $researchment->image }}" alt="" /></a>
                                    <div class="add-actions text-center">
                                        <div class="project-dec">
                                            <a class="portfolio-lightbox" data-gallery="myGallery"
                                                href="/patents/{{ $researchment->id }}/show">
                                                <h4>{{ $researchment->name_ar }}</h4>
                                                <span>{{ $researchment->details_ar }}</span>
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
    <!-- portfolio-item end --> --}}

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
    <!-- portfolio-item end --> --}}


            </div>

        </div>
    </div>
    <!-- End Portfolio Section -->


    <!-- End section 1 -->





















    <!-- end section 2 -->
    <!--start footer -->

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Colleage</h3>
                        <p>
                            example <br>
                            Example<br>
                            Example <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Vision</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis in praesentium deserunt
                            laborum delectus
                            iure libero? Officia ducimus eum ea beatae iusto quo ut repudiandae nulla, soluta voluptates
                            qui perspiciatis
                            dolores rerum nostrum libero tempora deserunt recusandae odit vitae. Ea?</p>
                    </div>

                </div>
            </div>
        </div>


    </footer>


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

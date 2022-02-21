<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

@extends('layouts.head-ar')

<!-- start wol js -->
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<link rel="stylesheet" href="/css/doctors.css">

<body>


    <!-- start navbar -->
    <header dir="rtl"  id="header" class="fixed-top">
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
                            @foreach ($Facutlies as $f)
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

    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->

    <section class="section-title">
        <div class="container">
            <h2 class="heading">Doctors</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur
                velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste
                officiis
                commodi quidem hic quas.</p>
        </div>


    </section>


    <!-- start section 1 -->
    <section id="testimonials" class="section-1  section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-around">

                    @foreach ($doctors as $doctor)
                        @if ($doctor->id_facutly == $facutly->id)
                            <div class="col-md-4">
                                <div class="testimonial-item">

                                    <img src="{{ $doctor->image }}" class="testimonial-img" alt="">
                                    <h3>{{ $doctor->name_ar }}</h3>
                                    <h4>{{ $doctor->note_ar }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $doctor->details_ar }}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <button class="btn btn-dark"><a
                                            href="/doctor/{{ $doctor->id }}/show"></a></button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    {{-- <div class="col-md-4">
      <div class="testimonial-item">
       <img src="/imgs/header.png" class="testimonial-img" alt="">
       <h3>Saul Goodman</h3>
       <h4>Ceo &amp; Founder</h4>
       <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
        ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
       </p>
       <button class="btn btn-dark">go</button>
      </div>
     </div>

     <div class="col-md-4">
      <div class="testimonial-item">
       <img src="/imgs/header.png" class="testimonial-img" alt="">
       <h3>Saul Goodman</h3>
       <h4>Ceo &amp; Founder</h4>
       <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
        ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
       </p>
       <button class="btn btn-dark">go</button>
      </div>
     </div>

     <div class="col-md-4">
      <div class="testimonial-item">
       <img src="/imgs/header.png" class="testimonial-img" alt="">
       <h3>Saul Goodman</h3>
       <h4>Ceo &amp; Founder</h4>
       <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
        ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
       </p>
       <button class="btn btn-dark">go</button>
      </div>
     </div>

     <div class="col-md-4">
      <div class="testimonial-item">
       <img src="/imgs/header.png" class="testimonial-img" alt="">
       <h3>Saul Goodman</h3>
       <h4>Ceo &amp; Founder</h4>
       <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
        ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
       </p>
       <button class="btn btn-dark">go</button>
      </div>
     </div>
     <div class="col-md-4">
      <div class="testimonial-item">
       <img src="/imgs/header.png" class="testimonial-img" alt="">
       <h3>Saul Goodman</h3>
       <h4>Ceo &amp; Founder</h4>
       <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
        ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
       </p>
       <button class="btn btn-dark">go</button>
      </div>
     </div>

     <div class="col-md-4">
      <div class="testimonial-item">
       <img src="/imgs/header.png" class="testimonial-img" alt="">
       <h3>Saul Goodman</h3>
       <h4>Ceo &amp; Founder</h4>
       <p>
        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam,
        ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
       </p>
       <button class="btn btn-dark">go</button>
      </div>
     </div> --}}




                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- end section 1 -->




    <!-- End section 1 -->


    <!-- start footer -->
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

    <script src="/js/main.js"></script>

    <!-- start section -->
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('/js/dark.js') }}"></script>

</body>

</html>

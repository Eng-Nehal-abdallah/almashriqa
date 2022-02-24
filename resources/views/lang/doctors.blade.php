<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="{{ asset('css/doctors.css') }}">
    @extends('layouts.head-en')

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
                            <li><a href="/login"> login</a></li>
                        </ul>
                        <ul>
                            <li class="dropdown"><a href="/en"><span>Home</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="/abouten">About University</a></li>
                                    <li><a href="/leaderunien">University Presidency </a></li>
                                    <li><a href="/feesen">Tuition fees </a></li>
                                    <li><a href="/strategyen">University strategy </a></li>
                                    <li><a href="/facutlyen">Doctors </a></li>
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
                                    <li><a href="/labexamfacen">lab Exam Table </a></li>
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
                                    <h3>{{ $doctor->name_en }}</h3>
                                    <h4>{{ $doctor->note_en }}</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        {{ $doctor->details_en }}
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
    @extends('layouts.footer-en')


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
    <script src="/js/dark.js"></script>
    <script src="/js/nav.js"></script>


</body>

</html>

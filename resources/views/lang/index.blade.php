<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" href="/scss/style.css">
    @extends('layouts.head-en')




    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>

<body class="text-left" dir="ltr">
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
                                    <li><a href="/facutlydocen">Doctors </a></li>
                                    <li><a href="/agreementsen">Agreements </a></li>

                                    <li><a href="/leaderworden">University President word</a></li>
                                    <li><a href="/facutlylaben">labs</a></li>
                                    <li><a href="/facutlyresearchen">achievements </a></li>
                                    <li><a href="/compusen">compus </a></li>
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

                            <li><a id="lang" class="nav-link scrollto" href="/">en </a></li>
                        </ul>
                        <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
                    </nav><!-- .navbar -->

                </div>
        </div>
    </header><!-- End Header -->
    <!-- end navbar -->

    <!-- start header -->
    <div class="header ">
        <div class="caption">
            <h1 class="heading text-center"> Mashriq University </h1>
            <!-- <h5></h5> -->
            <!-- <span class="btn">descover</span> -->

        </div>
        <div class="overlay"></div>

        <div class="overlay1"></div>

    </div>
    <!-- end header -->

    <!-- start after head -->
    <div class="after-head">
        <h1 class="">{{ $mash->abstract_title_en }}</h1>
        <br>
        <small>{{ $mash->abstract_small_en }}</small>

        <p>{{ $mash->abstract_details_en }}
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
        <div class="row  justify-content-around justify-content-md-center text-center justify-content-sm-center">

            @foreach ($fs as $f)
                <div class="col-md-3">
                    <img src="/icons/Group-62.png" alt="">
                    <h2> {{ $f->name_en }}</h2>

                    <p>{{ $f->about_facutly_en }}
                    </p>
                </div>
            @endforeach
            {{-- <div class="col-md-3">
    <img src="/icons/Group-63.png" alt="">
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

                <div class="col-md-5">
                    <img src="{{ $mash->image1 }}" alt="">
                </div>

                <div class="col-md-5">
                    <div class="caption">
                        <small>Faculty </small>
                        <h1 class="heading">{{ $mash->title_image1_en }}</h1>
                        <p class="">{{ $mash->details_image1_en }} </p>

                        <!-- <button class="bn54">
       <span class="bn54span">Button</span>
      </button> -->
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
                        <p>Faculties</p>
                    </div>
                </div>

                <div class="col-md-2 col-sm-5 col-6">

                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>
                        <span class="num" data-goal="100">{{ $achievements->count() }}</span>
                        <p> Researches</p>
                    </div>

                </div>

                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $doctors->count() }}</span>

                        <p>Professors </p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $labs->count() }}</span>

                        <p> Labs</p>
                    </div>

                </div>



                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $mash->room }}</span>

                        <p> University Rooms</p>
                    </div>

                </div>

                <div class="col-md-2 col-sm-5 col-6">
                    <div class="caption">
                        <i class='bx bx-select-multiple'></i>

                        <br>

                        <span class="num" data-goal="100">{{ $mash->students }}</span>

                        <p> Students</p>
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

                <div class="col-md-5">
                    <h1 class="heading ">{{ $mash->title_image2_en }}</h1>
                    <p class="">{{ $mash->details_image2_en }}</p>

                </div>


                <div class="col-md-5">
                    <img src="{{ $mash->image2 }}" alt="">
                </div>

            </div>
        </div>

    </section>


    <!-- end section 4 -->

    <!-- start section 5 -->
    <section class="section-5  ">
        <div class="container">
            <div class="caption text-center">
                <h1 class="heading">
                    Activities University
                </h1>

            </div>

            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                @foreach ($activities as $act)
                    <div>



                        <div class="card">

                            <img src="{{ $act->image }}" class="card-img" alt="...">

                        </div>
                        <div class="card p-3 ">
                            <h3 class="">{{ $act->name_en }}</h3>
                            @foreach ($doctors as $doct)
                                @if ($doct->id == $act->id_doctor)
                                    <small class="">{{ $doct->name_en }} </small>
                                @endif
                            @endforeach
                            <p class="second">
                                {{ $act->details_en }}
                                <br>
                            </p>
                            <a href="/activityen/{{ $act->id }}/show" class="btn btn-warning main">Details</a>

                            <!-- <div class="d-flex">
             <img class="second pr-1" src="/person/Ellipse 38.png" alt="">
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
            <h1 class="heading"> {{ $mash->option1_title_en }}</h1>

            <div class="row">
                <div class="col-md-12">
                    <p>
                        {{ $mash->option1_details_en }}</h1>

                    </p>

                </div>
            </div>

    </section>

    <!-- end section 6 -->



    <!-- start section 7 -->
    <section class="section-7 ">
        <div class="container">
            <h1 class="heading text-center">
                Achievements
            </h1>
            <!-- <h5 class="my-3">اَخر </h5> -->
            <div class="responsive" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                @foreach ($achievements as $ach)
                    <div>
                        <div class="card">
                            <img src="{{ $ach->image }}" class="card-img" alt="...">
                        </div>
                        <div class="card p-3 ">
                            <h5 style="font-size: 16px;" class=" ">{{ $ach->name_en }}</h5>
                            @foreach ($doctors as $doct)
                                @if ($doct->id == $ach->id_doctor)
                                    <h5 style="font-size: 16px;" class="">{{ $doct->name_en }}</h5>
                                @endif
                            @endforeach
                            <br>

                            @foreach ($types as $typ)
                                @if ($typ->id == $ach->id_types)
                                    <h5 style="font-size: 16px;" class="">{{ $typ->name_en }}</h5>
                                @endif
                            @endforeach
                            <br>
                            <p style="font-weight: bold;" class="second ">{{ $ach->details_en }}</p>
                            <!-- <p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos consequuntur eum non
       quidem quod quos
       ullam debitis maxime numquam in!</p> -->

                            <a href="/achen/{{ $ach->id }}/show" class="btn btn-warning main">Details</a>

                        </div>
                    </div>
                @endforeach


    </section>


    <!-- end section 7 -->



    <!-- start section 8 -->
    {{-- <section class="section-8 ">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="heading">
                        another option
                    </h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quisquam animi quam maiores
                        nesciunt nobis unde
                        velit ratione iure doloribus!</p>

                    <button class="btn btn-light">Browse <i class='bx bx-right-arrow-alt'></i></button>
                </div>


                <div class="col-md-6">
                    <h2 class="heading">
                        another option
                    </h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit quisquam animi quam maiores
                        nesciunt nobis unde
                        velit ratione iure doloribus!</p>
                    <button class="btn btn-light">Browse <i class='bx bx-right-arrow-alt'></i></button>
                </div>

            </div>

        </div>
    </section> --}}

    <!-- end section 8 -->


    <!--start footer -->

    @extends('layouts.footer-en')

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
                        centerPadding: '20px',
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '10px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>

    <script>
        $('.responsive').slick({
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



    <script src="{{ asset('/js/nav2.js') }}/js/nav2.js"></script>



</body>

</html>

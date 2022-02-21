<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="/scss/universities.css">
    @extends('layouts.head-en')

    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
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
                        <ul><li><a href="/login"> login</a></li>
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


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->





    <div class="header">
        <div class="content">
            <div class="row justify-content-around">
                <div class="col-md-5 text-left">
                    <h1 class="heading">Name</h1>
                    <h5>University</h5>
                    <span class="btn">descover</span>
                </div>
                <div class="col-md-5">
                    <img src="/icons/Untitled-1.png" alt="">
                </div>
            </div>
        </div>

        <div class="overlay"></div>
    </div>


    <!-- end header -->


    <!-- start after head -->
    <section class="after-head">
        <div class="container">

        </div>
    </section>



    <!-- end after head -->

    <section class="section-1">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-3">
                    <img class="main" src="/icons/Group 53.png" alt="">
                    <h2>ADV</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel voluptas assumenda a autem eum!
                        Minus.
                    </p>
                </div>
                <div class="col-md-3">
                    <img class="main" src="/icons/Group 54.png" alt="">
                    <h2>ADV</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel voluptas assumenda a autem eum!
                        Minus.
                    </p>
                </div>
                <div class="col-md-3">
                    <img class="main" src="/icons/Group 52.png" alt="">
                    <h2>ADV</h2>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel voluptas assumenda a autem eum!
                        Minus.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- start  section 2 -->
    <section class="section-2">
        <div class="container">
            <div class="head text-center">
                <h1 class="heading">large text</h1>
                <small>this is small</small>
            </div>
            <div class="row">

                <div class="col-md-3">
                    <img src="/icons/Group 64.png" alt="">
                    <h4>23</h4>
                    <p>lorem</p>
                </div>

                <div class="col-md-3">
                    <img src="/icons/Group 65.png" alt="">
                    <h4>23</h4>
                    <p>lorem</p>
                </div>

                <div class="col-md-3">
                    <img src="/icons/Group 66.png" alt="">
                    <h4>23</h4>
                    <p>lorem</p>
                </div>

                <div class="col-md-3">
                    <img src="/icons/Group 67.png" alt="">
                    <h4>23</h4>
                    <p>lorem</p>
                </div>

            </div>
        </div>
    </section>


    <!-- End  section 2 -->


    <!-- start section 3 -->
    <section class="section-3">
        <div class="container">
            <div class="caption ">
                <h1 class="heading">
                    College Activities
                </h1>
                <small>small text</small>
            </div>
            <div class="center" data-slick='{"slidesToShow": 3, "slidesToScroll": 3}'>
                <div>
                    <div class="card">
                        <img src="/imgs/header.png" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">
                        <button class="btn main">click</button>

                        <p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos
                            consequuntur eum non
                            quidem quod quos
                            ullam debitis maxime numquam in!</p>
                        <div class="d-flex">
                            <img class="second pr-1" src="/person/Ellipse 38.png" alt="">
                            <small class="text-capitalize">name of person</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <img src="/imgs/header.png" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">
                        <button class="btn main">click</button>

                        <p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos
                            consequuntur eum non
                            quidem quod quos
                            ullam debitis maxime numquam in!</p>
                        <div class="d-flex">
                            <img class="second pr-1" src="/person/Ellipse 38.png" alt="">
                            <small class="text-capitalize">name of person</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <img src="/imgs/header.png" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">
                        <button class="btn main">click</button>

                        <p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos
                            consequuntur eum non
                            quidem quod quos
                            ullam debitis maxime numquam in!</p>
                        <div class="d-flex">
                            <img class="second pr-1" src="/person/Ellipse 38.png" alt="">
                            <small class="text-capitalize">name of person</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <img src="/imgs/header.png" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">
                        <button class="btn main">click</button>

                        <p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos
                            consequuntur eum non
                            quidem quod quos
                            ullam debitis maxime numquam in!</p>
                        <div class="d-flex">
                            <img class="second pr-1" src="/person/Ellipse 38.png" alt="">
                            <small class="text-capitalize">name of person</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <img src="/imgs/header.png" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">
                        <button class="btn main">click</button>

                        <p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos
                            consequuntur eum non
                            quidem quod quos
                            ullam debitis maxime numquam in!</p>
                        <div class="d-flex">
                            <img class="second pr-1" src="/person/Ellipse 38.png" alt="">
                            <small class="text-capitalize">name of person</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card">
                        <img src="/imgs/header.png" class="card-img" alt="...">
                    </div>
                    <div class="card p-3 ">
                        <button class="btn main">click</button>

                        <p class="second">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos
                            consequuntur eum non
                            quidem quod quos
                            ullam debitis maxime numquam in!</p>
                        <div class="d-flex">
                            <img class="second pr-1" src="/person/Ellipse 38.png" alt="">
                            <small class="text-capitalize">name of person</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- end section 3 -->

    <!-- start section 4 -->
    <section class="section-4">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <img src="/imgs/header.png" alt="">
                </div>
                <div class="col-md-5">
                    <small>small text</small>
                    <h1 class="heading">small text</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, at voluptatibus. Cupiditate
                        numquam esse
                        quisquam sint, reprehenderit unde suscipit veritatis?</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quo reprehenderit, ex eligendi
                        quibusdam sunt?</p>
                </div>
            </div>

        </div>
    </section>





    <!-- end section 4 -->


    <!-- start section 5 -->
    <section class="section-5">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2>our vision</h2>
                    </div>

                    <ul>


                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dignissimos iste cupiditate
                            accusantium
                            quidem esse sequi necessitatibus, nisi nemo odio optio ea </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dignissimos iste cupiditate
                            accusantium
                            quidem esse sequi necessitatibus, nisi nemo odio optio ea </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dignissimos iste cupiditate
                            accusantium
                            quidem esse sequi necessitatibus, nisi nemo odio optio ea </li>
                    </ul>

                </div>

                <div class="col-md-5">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2>our goals</h2>
                    </div>

                    <ul>


                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dignissimos iste cupiditate
                            accusantium
                            quidem esse sequi necessitatibus, nisi nemo odio optio ea </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dignissimos iste cupiditate
                            accusantium
                            quidem esse sequi necessitatibus, nisi nemo odio optio ea </li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dignissimos iste cupiditate
                            accusantium
                            quidem esse sequi necessitatibus, nisi nemo odio optio ea </li>
                    </ul>

                </div>

            </div>
        </div>
    </section>



    <!-- end section 5 -->


    @extends('layouts.footer-en')




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



    <!-- start section -->
    <script src="/js/main.js"></script>
    <script src="/js/dark.js"></script>
    <script src="/js/nav.js"></script>

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
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
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
        $('.section-3 .responsive').slick({
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

</body>

</html>

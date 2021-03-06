<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="stylesheet" href="{{ asset('/scss/universities.css') }}">
    <link rel="stylesheet" href="/scss/table-test.css">

    @extends('layouts.head-en')

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- start box icon -->

    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />


    <!-- start wol js -->

    <title>Document</title>
</head>

{{-- sss --}}

<body class="text-left">
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo"><img src="/icons/Untitled-1.png" alt="" class="img-fluid"></a>


            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="/">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/login"> login</a></li>
                </ul>
                <ul>
                    <li class="dropdown"><a href="/en"><span>Home</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/abouten">About University</a></li>
                            <li><a href="/leaderunien">University Presidency </a></li>
                            <li><a href="/feesen">Tuition fees </a></li>
                            <li><a href="/strategyen">University strategy </a></li>
                            <li><a href="/facutlydocen">Doctors </a></li>
                            <li><a href="/agreementsen">Agreements </a></li>

                            <li><a href="/leaderworden">University President word</a></li>
                            <li><a href="/facutlylaben">labs</a></li>
                            <li><a href="/facutlyresearchen">Researches </a></li>
                            <li><a href="/compusen">compus </a></li>
                            {{-- <li><a href="/papersen">Cellender term </a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreementsen"><span>Acceptable</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/agreementsen">Registration mechanism </a></li>
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
                                    <ul>
                                        @foreach ($departments as $depart)
                                            @if ($depart->id_facutly == $f->id)
                                                <li><a
                                                        href="/departmenten/{{ $depart->id }}/show">{{ $depart->name_en }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>

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

                    <li><a id="lang" class="nav-link scrollto" href="/">en </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
            </nav><!-- .navbar -->

        </div>
        </div>
    </header><!-- End Header -->
    <!-- end navbar -->





    <div class="header">
        <div class="content">
            <div class="row justify-content-around">
                <div class="col-md-5 text-left">
                    <h1 class="heading color mt-4">{{ $facutly['name_en'] }} </h1>
                    <!-- <span class="btn">descover</span> -->
                </div>
                <div class="col-md-5">
                    <img src="{{ $facutly['image'] }}" alt="">
                </div>
            </div>
        </div>

        <div class="overlay"></div>
    </div>


    <!-- end header -->

    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->

    <!-- start section 6 -->
    <section class="section-6 my-4 ">
        <div class="container">
            <div class="alert text-center alert-light">
                <h5>college leader</h5>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-5">
                    <img src="/{{ $facutly['images'] }}" alt="">
                </div>
                <div class="col-md-5 ">
                    <h2 class="color">Leader word</h2>
                    <p> {{ $facutly['message_dean_en'] }} </p>

                </div>
            </div>
        </div>
    </section>

    <!-- End section 6 -->

    <div class="container">
        <hr>

    </div>

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-9 section-bg">
        <div class="container mt-3">
            <div class="row justify-content-center">
                @foreach ($doctors as $doctor)
                    @if ($doctor->id_facutly == $facutly->id)
                        <div class="col-lg-4 col-sm-12 col-md-5 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">

                                    <img src="/{{ $doctor->image }}" class="img-fluid imgs" alt="">
                                    <div class="social">
                                        @foreach ($socials as $social)
                                            @if ($social->id_doctor == $doctor->id)
                                                <a href="{{ $social['link'] }}">{{ $social['name_ar'] }}</a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $doctor['name_ar'] }} </h4>
                                    <span>{{ $doctor->private_specific_en }}/{{ $doctor['public_specific_ar'] }}
                                    </span>
                                    <br><br>
                                    <a class="btn bg-color shadow-sm btn-dark" href="/doc/{{ $doctor->id }}/show">
                                        visit profile
                                    </a>
                                </div>
                                <style>

                                </style>
                            </div>
                        </div>
                    @endif
                @endforeach



            </div>



        </div>
    </section><!-- End Team Section -->

    <!-- start section 5 -->
    <section class="section-5 text-right" dir="rtl">
        <div class="container">
            <div class="row ">

                <div class="col-md-4">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2 class="my-4 color">Vision</h2>
                        <hr>
                    </div>
                    <p>
                        {{ $facutly['view_en'] }}</p>

                </div>

                <div class="col-md-4">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2 class="my-4 color">message </h2>
                        <hr>
                    </div>
                    <p> {{ $facutly['message_en'] }}</p>

                </div>
                <div class="col-md-4">
                    <div class="d-flex text-center">
                        <i class='bx bx-radio-circle-marked'></i>
                        <h2 class="my-4 color">Objectives</h2>
                        <hr>
                    </div>
                    <ul>
                        <li> {{ $facutly['goal_en'] }}</li>
                    </ul>

                </div>

            </div>
            <hr>


        </div>
    </section>
    <!-- end section 5 -->


    <!-- start section 6 -->
    <section class="section-6  text-center">

        <div class="container">
            <h1 class="heading"> About University </h1>

            <div class="row">
                <div class="col-md-12">
                    <p>{{ $facutly['about_facutly_en'] }}


                    </p>

                </div>
            </div>

    </section>

    <!-- end section 6 -->


    {{-- end about seection --}}

    <!-- start section 3 -->
    <section class="section-3 my-5 py-4  bg-light">
        <div class="container">
            <div class="caption ">
                <h1 class="text-center  color">
                    Activities
                </h1>
            </div>
            <div class="responsive">
                @foreach ($activities as $act)
                    @if ($act->id_faculty == $facutly->id)
                        <div class="m-1">
                            <div class="card ">
                                <img src="/{{ $act->image }}" class="card-img" alt="...">
                            </div>
                            <div class="card p-3 ">
                                <h4>{{ $act->name_en }}</h4>
                                @foreach ($doctors as $doc)
                                    @if ($act->id_doctor == $doc->id)
                                        <h4>{{ $doc->name_en }}</h4>
                                    @endif
                                @endforeach

                                <p style="font-weight: bold;" class="second">{{ $act->detaila_en }}</p>
                                <a class="btn bg-color btn-block  main m-auto "
                                    href="/acten/{{ $act->id }}/show">Details</a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>


    </section>
    <!-- end section 3 -->







    <!-- end section 4 -->

    <!-- start seection 6 -->
    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers ">
        <div class="container" data-aos="fade-up">
            <hr>
            <h2 class="text-center color my-3">first student</h2>
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($students as $st)
                    @if ($st->id_facutly == $facutly->id)
                        <div class="col-lg-4  col-md-6 d-flex align-items-stretch">

                            <div class="member">
                                <img src="/{{ $st->image }}" class="img-fluid" alt="">
                                <div class="member-content ">
                                    <h1 class="inside bg-color">{{ $st->grade_en }}</h1>

                                    <h4 class=""> {{ $st->name_en }}</h4>
                                    <span
                                        class="badge bg-color d-inline-block badge-secondary p-3">{{ $st->level_en }}</span>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

        </div>
    </section><!-- End Trainers Section -->

    <!-- start seection 6 -->

    <!-- start section 3 -->
    <section class="section-5  bg-light">
        <div class="container">
            <div class="caption ">
                <hr>
                <h1 class="text-center my-3">
                    LABS
                </h1>
            </div>
            <div class="center">
                @foreach ($labs as $lab)
                    @if ($lab->id_faculty == $facutly->id)
                        <div>
                            <div class="card ">
                                <img src="/{{ $lab->image }}" class="card-img" alt="...">
                            </div>
                            <div class="card p-3 ">

                                <h4 class="">{{ $lab->name_en }}</h4>

                                <p style="font-weight: bold;" class="second ">{{ $lab->details_en }}.</p>
                                <a href="/lab/{{ $lab->id }}/show"
                                    class="btn bg-color btn-block main m-auto ">Details</a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

        </div>

    </section>
    <!-- end section 3 -->

    <!-- start  section 2 -->
    <section class="section-2 bg-color">
        <div class="container">
            <div class="head text-center">
                <!-- <small>this is small</small> -->
            </div>
            <div class="row">

                <div class="col-md-3">

                    <div class="count">{{ $l->count() }}</div>
                    <br>
                    <p>Num of Labs </p>
                </div>

                <div class="col-md-3">

                    <div class="count">{{ $doc->count() }}</div>

                    <br>
                    <p> Professors </p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $ach->count() }}</div>

                    <br>
                    <p>Researches </p>
                </div>

                <div class="col-md-3">
                    <div class="count">{{ $act->count() }}</div>

                    <br>
                    <p> Activities </p>
                </div>

            </div>
        </div>
    </section>



    @if ($d->count() > 0)
        <section class="section-7 text-left my-4  py-4">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-5 ">
                        <h2>Departments </h2>
                        <p class="text-left">
                            {{ $facutly->details_en }}
                        </p>
                        <div class="dropdown  float-right">
                            <button class="btn bg-color dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-expanded="false">
                                Departments
                            </button>
                            <div class="dropdown-menu bg-color" aria-labelledby="dropdownMenuButton">
                                @foreach ($departments as $department)
                                    @if ($department->id_facutly == $facutly->id)
                                        <a class="dropdown-item"
                                            href="/department/{{ $department->id }}/show">{{ $department->name_en }}</a>
                                    @endif
                                @endforeach

                            </div>

                        </div>
                    </div>
                    <div class="col-md-5">
                        <img class="main" src="/{{ $facutly->image }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- start seection 6 -->

    @extends('layouts.footer-en')


    <!-- start jquery -->
    <script src=" {{ asset('/js/jquery-3.6.0.min.js') }}"></script>
    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src=" {{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src=" {{ asset('/js/popper.min.js') }}"></script>
    <script src=" {{ asset('/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/js/slick.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- start section -->
    <script src=" {{ asset('/js/main.js') }}"></script>
    <script src=" {{ asset('/js/dark.js') }}"></script>
    <script src=" {{ asset('/js/nav.js') }}"></script>


    <script>
        $('.section-5 .center').slick({
            centerMode: true,

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
                    breakpoint: 550,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '10px',
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
            slidesToShow: 3,
            slidesToScroll: 3,
            margin: '30px',
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
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3

                    }
                },
                {
                    breakpoint: 560,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: false,
                        dots: false

                    }
                }

            ]
        });
    </script>
    <script>
        $(document).ready(function() {
            $(dark).on('click', function() {
                $('body').toggleClass('dark');
                $('.trainers').toggleClass('dark');
                $('.section-2').toggleClass('dark');
                $('.section-2').toggleClass('');
                $('.section-3').toggleClass('dark');
                $('.section-4').toggleClass('dark');
                $('.section-5').toggleClass('dark');
                $('.section-6').toggleClass('dark');
                $('.section-7').toggleClass('dark');
                $('.section-8').toggleClass('dark');
                $('footer').toggleClass('dark');

            })
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

        $('.color').css('color', '{{ $facutly->color }}');
        $('.bg-color').css('background-color', '{{ $facutly->color }}');
        $('.slick-next').css('color', '{{ $facutly->color }}');
    </script>


</body>

</html>

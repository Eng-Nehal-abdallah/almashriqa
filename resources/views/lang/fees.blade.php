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
    <link href='/css/boxicons.min.css' rel='stylesheet'>
    <!--start fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="/scss/Tuition-fees.css">
    @extends('layouts.head-en')
    <link rel="stylesheet" href="/scss/table-test.css">



    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />


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



    <!-- start haeder -->
    <div class="header">
        <div class="caption">
            <h1 class="heading">Acceptance rate and premiums</h1>
            <!-- <h5>University</h5> -->
        </div>

        <div class="overlay"></div>

    </div>

    <!-- end header -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->

    <!-- start section 1 -->
    <section class="section-1">
        <div class="head text-center">
            <h3 class="my-3 p-3 ">Acceptance rate and premiums</h3>
            <!-- <p>small text</p> -->
        </div>
@foreach ($fees as $f )


        <div class="container">
            {!! html_entity_decode($f->tablecode_ar) !!}
        </div>
        @endforeach
    </section>
    <!-- End section 1 -->


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
    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>

    <!-- start section -->
    <script src="/js/main.js"></script>
    <script src="/js/dark.js"></script>


    <script src="/js/nav.js"></script>

    <script>
        var bool = true;

        $(document).ready(function() {
            $('#lang').on('click', function() {

                if (bool == true) {
                    $("body").removeAttr("dir", "ltr");
                    $("body").attr("dir", "rtl");

                    $('.section-1').removeClass('text-left')
                    $('.section-1').addClass('text-right')

                    $('.section-2').removeClass('text-left')
                    $('.section-2').addClass('text-right')
                    bool = false;
                } else if (bool == false) {
                    $("body").removeAttr("dir");
                    $("body").attr("dir", "ltr");

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
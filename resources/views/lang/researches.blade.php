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
    <link rel="stylesheet" href="/scss/table-test.css">
    @extends('layouts.head-en')


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





    <!-- start section 1 -->
    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio section-1 portfolio-area area-padding fix">
        <div class="container">


            <div class="card border-light mb-3">
                <h5 class="card-header text-center">All Achievement</h5>
                <div class="card-body">
                    <div class="row awesome-project-content portfolio-container">
                        @foreach ($achievements as $ach)
                            @if ($ach->id_facutly == $facutly->id)
                                <!-- portfolio-item start -->
                                <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item filter-app portfolio-item">
                                    <div class="single-awesome-project">
                                        <div class="awesome-img">
                                            <a name="link" href="/ach/{{ $ach->id }}/show"><img
                                                    src="/{{ $ach->image }}" alt="" /></a>
                                            <div class="add-actions text-center">
                                                <div class="project-dec">
                                                    <a class="portfolio-lightbox" data-gallery="myGallery"
                                                        href="/ach/{{ $ach->id }}/show">
                                                        <h4>{{ $ach->name_en }}</h4>
                                                        @foreach ($types as $type)
                                                            @if ($type->id == $ach->id_types)
                                                                <span>{{ $type->name_en }}</span>
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



                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Portfolio Section -->



    <!--start footer -->

    <!-- start footer -->
    @extends('layouts.footer-en')

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

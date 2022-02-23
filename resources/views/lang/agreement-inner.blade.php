<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @extends('layouts.head-en')
    <link rel="stylesheet" href="/scss/agreement-inner.css">



    <!-- start wol js -->

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>


<body class="text-right" dir="rtl">
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="/icons/Untitled-1.png" alt=""
                    class="img-fluid"></a>


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

                        <li><a id="lang" class="nav-link scrollto" href="/">en </a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
                </nav><!-- .navbar -->

            </div>
        </div>
    </header><!-- End Header -->
    <!-- end navbar -->


    <!-- start section 2 -->

    <section class="section-2 ">
        <div class="container-fluid">
            <div class="row justify-content-around">

                <div class="col-md-5 col-sm-10">
                    <img src="{{ asset('imgs/header.png') }}" alt="">
                </div>

                <div class="col-md-5 col-sm-10">
                    <div class="caption">
                        <small>جامعة </small>
                        <h2>jkhgfdghjkjhgfdsfdghj</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero placeat similique maiores
                            consequatur velit reprehenderit, nobis aliquid, quia exercitationem sequi molestiae unde
                            numquam nam, amet laudantium accusamus eaque voluptatibus sapiente?</p>


                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- End section 2 -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->
    <!-- starting section 1 -->

    <!-- end section 1 -->

    <!--start footer -->

    @extends('layouts.footer-en')
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
    {{-- <script src="/js/dark.js"></script> --}}

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

        $(document).ready(function() {
            var dark = document.querySelector('.dark-mood > .fas');

            var x = 0;
            dark.on('click', function() {
                if (x == 0) {
                    $('body').addClass('dark');

                }
            })



        })
    </script>

</body>

</html>

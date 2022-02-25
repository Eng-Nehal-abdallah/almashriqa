<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- start bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- start box icon -->
    <!-- <link href='./css/boxicons.min.css' rel='stylesheet'> -->

    <link rel="stylesheet" href="/scss/patent-inner2.css">
    @extends('layouts.head-en')




    <!-- start wol js -->
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <link rel="stylesheet" href="/css/footer.css">


    <title>Document</title>
</head>


<body>

    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo"><img src="/icons/Untitled-1.png" alt="" class="img-fluid"></a>



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

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    @endguest
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
                            <li><a href="/facutlyresearchen">achievements </a></li>
                            <li><a href="/compusen">compus </a></li>
                            <li><a href="/chartEn">statistics </a></li>

                            {{-- <li><a href="/papersen">Cellender term </a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreementsen"><span>Acceptable</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/agreementsen">Registration mechanism</a></li>
                            <li><a href="/accepten">Acceptable Rules </a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">Register Papaer </a></li>

                        </ul>
                    </li>





                    <li class="dropdown"><a href="/facutlyen"><span>Facutlies</span> <i
                                class="bi bi-chevron-down"></i></a>


                        <ul>
                            @foreach ($Facutlies as $f)
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
    <div class="dark-mood">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->







    <br><br><br>

    <!-- End section-2 -->

    <!-- start section 7 -->
    <section class="section-7  my-5">
        <div class="container">
            <h1 class="heading  text-center">
                labs
            </h1>
            <!-- <h5 class="my-3">اَخر البحوث</h5> -->

            <div class="row">
                @foreach ($labs as $lab)
                    @if ($lab->id_faculty == $facutly->id)
                        <div class="col-md-4 my-3">
                            <div class="card">

                                <img src="/{{ $lab->image }}" class="card-img" alt="...">


                            </div>
                            <div class="card p-3 ">
                                <h4 class="">{{ $lab->name_en }}</h4>


                                <p class="second">
                                    {{ $lab->details_en }}
                                    <br>
                                </p>
                                <a href="/laben/{{ $lab->id }}/show"
                                    class="btn  btn-warning main m-auto ">details</a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>

    <!-- end section 7 -->


    <!--start footer -->

    @extends('layouts.footer-en')

    <!-- start jquery -->
    <script src="./js/jquery-3.6.0.min.js"></script>

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

    <script>
        $('.section-7 .center').slick({
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 3,
            autoplay: true,
            responsive: [{
                    breakpoint: 900,
                    settings: {
                        arrows: true,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
                },

                {
                    breakpoint: 500,
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


</body>

</html>

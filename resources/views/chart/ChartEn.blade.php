<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>amCharts 5 Example - pie-chart</title>
    <link rel="stylesheet" href="{{ asset('css/chart/Chart.css') }}" />
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
                                    <li><a href="/papersen">Cellender term </a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="/agreementsen"><span>Acceptable</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="/mechineen">LogIN Machine </a></li>
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
    </header>

    <style>
        #chartdiv {
            width: 100%;
        }

    </style>


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->

    {{-- start chart --}}
    <section class="section-1">
        <div class="container-fluid my-1">

            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>

                <div id="chartdiv"></div>

                <div class="row justify-content-center justify-content-sm-center">

                    <div class="caption one col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>34</h5>
                            <p class="cold-flex p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                                labore.
                            </p>
                        </div>
                    </div>

                    <div class="caption tow col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>34</h5>
                            <p class="cold-flex p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                                labore.
                            </p>
                        </div>
                    </div>

                    <div class="caption three col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>34</h5>
                            <p class="cold-flex p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                                labore.
                            </p>
                        </div>
                    </div>

                    <div class="caption four col-sm-6 col-10 col-md-3">
                        <div class="color d-inline"></div>
                        <div class="caption text-center">
                            <h5>34</h5>
                            <p class="cold-flex p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                                labore.
                            </p>
                        </div>
                    </div>


                </div>

                <div class="card-footer text-muted">
                    2 days ago
                </div>
            </div>

        </div>
    </section>
    {{-- end chart --}}




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


    <script src="{{ asset('js/chart/main.js') }}"></script>
    <script src="{{ asset('js/chart/percent.js') }}"></script>
    <script src="{{ asset('js/chart/Animated.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>

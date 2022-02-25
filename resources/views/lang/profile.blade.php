<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Personal Portfolio Website</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- start bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="/scss/profile/font-awesome.css">

    <!-- main css -->
    <link rel="stylesheet" type="text/css" href="/scss/profile/style.css">


    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href="/scss/profile/responsive.css">
    <!-- default color skin -->
    <link rel="stylesheet" type="text/css" href="/scss/profile/style-switcher.css">
    <!-- style switcher - for demo purposes only -->
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-1"
        href="/scss/profile/skins/color-1.css">
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-2" href="/scss/profile/skins/color-2.css"
        disabled>
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-3" href="/scss/profile/skins/color-3.css"
        disabled>
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-4" href="/scss/profile/skins/color-4.css"
        disabled>
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-5" href="/scss/profile/skins/color-5.css"
        disabled>
    <link rel="stylesheet" type="text/css" href="profile/style-switcher.css">
</head>

<body class="dark">

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

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>


                            @endguest
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

    <!-- header end -->

    <!-- navigation menu start -->

    <div class="fade-out-effect">
    </div>
    <!-- navigation menu end -->

    <!-- home section start -->
    <section class="home-section section active" id="home">
        <!-- effect wrap start -->
        <div class="effect-wrap">
            <div class="effect effect-1">
            </div>
            <div class="effect effect-2">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="effect effect-3">
            </div>
            <div class="effect effect-4">
            </div>
            <div class="effect effect-5">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- effect wrap end -->
        <div class="container">
            <div class="row full-screen align-items-center">
                <div class="home-text">

                    <h2>{{ $doctor->name_en }}
                    </h2>{{ $doctor->position_en }}/{{ $doctor->public_specific_en }}
                    <h1>
                    </h1>
                    <a href="#about" class="link-item btn-1 outer-shadow hover-in-shadow">المزيد من التفاصيل</a>
                </div>
                <div class="home-img">
                    <div class="img-box inner-shadow">
                        <img src="/{{ $doctor->image }}" class="outer-shadow" alt="profile-pic">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- home section end -->

    <!-- about section start -->
    <section class="about-section section" id="about">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="main info">About me</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <div class="img-box inner-shadow">
                        <img src="/{{ $doctor->image }}" class="outer-shadow" alt="profile-pic">
                    </div>
                    <!-- social links start -->
                    <div class="social-links">
                        @foreach ($typs as $ty)
                            @foreach ($socials as $s)
                                @if ($s->id_type == $ty->id && $s->id_doctor == $doctor->id)
                                    <a href="{{ $s->link }}" class="outer-shadow hover-in-shadow"
                                        target="_blank"><i class="fab fa-">{{ $ty->name_en }}</i></a>
                                @endif
                            @endforeach
                        @endforeach


                    </div>
                    <!-- social links end -->
                </div>
                <div class="about-info">
                    <p style="direction: rtl; font-weight: b; "><span>{{ $doctor->details_en }}
                    </p>
                    <a href="{{ $doctor->pdf }}" class="btn-1 outer-shadow hover-in-shadow">CV</a>
                    <a href="#contact" class="link-item btn-1 outer-shadow hover-in-shadow"> Connectiom</a>
                </div>
            </div>
            <!-- about tabs start -->
            <div class="row">
                <div class="about-tabs">
                    @foreach ($types as $type)
                        @if ($type->id == 1)
                            <span class="tab-item outer-shadow active" " data-target="
                                .{{ $type->name_en }}">{{ $type->name_en }} </span>
                        @endif
                        @if ($type->id > 1)
                            <span class="tab-item"
                                data-target=".{{ $type->name_en }}">{{ $type->name_en }}</span>
                        @endif
                    @endforeach
                </div>
            </div>
            <!-- about tabs end -->


            @foreach ($types as $type)
                @foreach ($achievementes as $ach)
                    @if ($ach->id_types == $type->id && $ach->id_doctor == $doctor->id)
                        <!-- experience start -->
                        <div class="row">
                            <div class=" {{ $type->name_en }} tab-content active">
                                <div class="row">
                                    <div class="timeline">
                                        <div class="row">
                                            <!-- timeline item start -->
                                            <div class="timeline-item">
                                                <div class="timeline-item-inner outer-shadow">
                                                    <i class="fas fa-briefcase icon"></i>
                                                    <span>{{ $ach->date }} </span>
                                                    @foreach ($Facutlies as $f)
                                                        @if ($f->id == $ach->id_facutly)
                                                            <h2>{{ $f->name_en }}/{{ $ach->name_en }}</h2>
                                                        @endif
                                                    @endforeach
                                                    <h3>{{ $ach->details_en }}</h3>
                                                    <a href="{{ $ach->pdf }}"> Download </a>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- experience end -->
                    @endif
                @endforeach
            @endforeach




        </div>
    </section>
    <!-- about section end -->





    <!-- contact section start -->
    <section class="contact-section section" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="contact">Get In Touch</h2>
                </div>
            </div>
            <div class="row">
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-phone"></i>
                        <span> Phone</span>
                        <p>{{ $doctor->phone }}</p>
                    </div>
                </div>
                <!-- contact item end -->
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-envelope"></i>
                        <span>Email</span>
                        <p>{{ $doctor->email }}

                        </p>
                    </div>
                </div>
                <!-- contact item end -->
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Address</span>
                        <p>{{ $doctor->country_en }}</p>
                    </div>
                </div>
                <!-- contact item end -->
            </div>
            <div class="row">
                <div class="contact-form">

                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->

    <!-- portfolio popup start -->
    <div class="pp portfolio-popup">
        <div class="pp-details">
            <div class="pp-details-inner">
                <div class="pp-title">
                    <h2></h2>
                    <p>Category - <span class="pp-project-category"></span></p>
                </div>
                <div class="pp-project-details">
                </div>
            </div>
        </div>

        <div class="separator"></div>

        <div class="pp-main">
            <div class="pp-main-inner">
                <div class="pp-project-details-btn outer-shadow hover-in-shadow">Project Details <i
                        class="fas fa-plus"></i>
                </div>
                <div class="pp-close outer-shadow hover-in-shadow">&times;</div>
                <img src="img/portfolio/large/project-1/1.png" alt="img" class="pp-img outer-shadow">
                <div class="pp-counter"></div>
            </div>
            <div class="pp-loader">
                <div></div>
            </div>
            <!-- pp navigation -->
            <div class="pp-prev"><i class="fas fa-play"></i></div>
            <div class="pp-next"><i class="fas fa-play"></i></div>
        </div>
    </div>
    <!-- portfolio popup end -->

    <!-- style switcher start - for demo purposes only -->
    <div class="style-switcher outer-shadow">
        <div class="style-switcher-toggler s-icon outer-shadow hover-in-shadow">
            <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="day-night s-icon outer-shadow hover-in-shadow">
            <i class="fas"></i>
        </div>

        <h4>Theme Colors</h4>
        <div class="colors">
            <span class="color-1" onclick="setActiveStyle('color-1')"></span>
            <span class="color-2" onclick="setActiveStyle('color-2')"></span>
            <span class="color-3" onclick="setActiveStyle('color-3')"></span>
            <span class="color-4" onclick="setActiveStyle('color-4')"></span>
            <span class="color-5" onclick="setActiveStyle('color-5')"></span>
        </div>
    </div>
    <!-- style switcher end -->



    <!-- style switcher js -->
    <script src="js/style-switcher.js"></script>
    <script src="/js/nav2.js"></script>

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
    <script src="/js/nav2.js"></script>

    <!-- main js -->
    <script src="js/profile.js"></script>
    <script src="js/style-switcher.js"></script>


</body>

</html>

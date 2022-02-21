<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Maysaa Ali Abdul Khaleq</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- font awesome -->

    <!-- main css -->

    <!-- responsive css -->

    <!-- default color skin -->
    <link rel="stylesheet" type="text/css" href="{{ asset('profile_css/skins/color-1.css') }}">
    <!-- style switcher - for demo purposes only -->
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-1"
        href="{{ asset('profile_css/skins/color-1.css') }} ">
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-2"
        href="{{ asset('profile_css/skins/color-2.css') }} " disabled>
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-3"
        href="{{ asset('profile_css/skins/color-3.css') }} " disabled>
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-4"
        href="{{ asset('profile_css/skins/color-4.css') }} " disabled>
    <link rel="stylesheet" type="text/css" class="alternate-style" title="color-5"
        href="{{ asset('profile_css/skins/color-5.css') }} " disabled>
    <link rel="stylesheet" type="text/css" href="{{ asset('profile_css/style-switcher.css') }}">


    <!-- start bootstrap -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- start box icon -->
    <link href='profile_css/boxicons.min.css' rel='stylesheet'>
    <!--start fontawesome -->

    <link rel="stylesheet" type="text/css" href="{{ asset('/profile_css/dark&light.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('profile_css/responsive.css') }}./">


    <link rel="stylesheet" href="{{ asset('/profile_css/navbar-main.css') }}">
    <link rel="stylesheet" href="{{ asset('/profile_css/style.css') }}">

</head>

<body class="dark">



    <!-- start navbar -->
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

                            <li><a class="nav-link scrollto" href="/facutlyresearchen">Achievements</a></li>



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



    <!-- home section start -->
    <section class="home-section section active" id="home">
        <!-- effect wrap start -->
        <div class="effect-wrap">
            <div class="effect effect-1">
            </div>
            <div class="effect effect-2">

            </div>
            <div class="effect effect-3">
            </div>
            <div class="effect effect-4">
            </div>
            <div class="effect effect-5">

            </div>
        </div>
        <!-- effect wrap end -->
        <div class="container">
            <div class="row full-screen align-items-center">
                <div class="home-text">

                    <h2>{{ $doctor->name_en }} </h2>
                    <h1> {{ $doctor->private_specific_en }}/{{ $doctor->public_specific_en }}</h1>

                </div>
                <div class="home-img">
                    <div class="img-box inner-shadow">
                        <img src="{{ $doctor->image }}" class="outer-shadow" alt="pic">
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
                    <h2 data-heading="معلوماتي">المعلومات</h2>
                </div>
            </div>
            <div class="row">
                <div class="about-img">
                    <div class="img-box inner-shadow">
                        <img src="{{ $doctor->image }}" class="outer-shadow" alt="pic">
                    </div>
                    <!-- social links start -->
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
                    <h1 style="color: azure; text-align: center;">
                        {{ $doctor->details_en }}

                    </h1>
                    <a href="{{ $doctor->pdf }}" class="btn-1 outer-shadow hover-in-shadow">Download CV</a>

                </div>


        <div class="row">
            <div class="about-tabs">
                <span class="tab-item outer-shadow active" data-target=".skills"> <a href="/den/{{ $doctor->id }}/research"> تفاصيل الانجازات</a></span>

            </div>

            <div class="skill-item" style="">

            @foreach ($achievementes as $ach)
                @if ($ach->id_doctor == $doctor->id)
                    <!-- skills start -->
                    <div style="bottom: auto;" class="row">
                        <div class="skills ">
                            <div class="row">
                                <!-- skill item start -->
                                <div class="skill-item">
                                    <h2 style="text-align: center;font-size:x-large; color: white;">
                                        {{ $ach->name_en }} {{ $ach->date }}
                                    </h2>
                                    <h2 style="text-align: center;font-size:x-large; color: white;">
                                        {{ $ach->details_en }}
                                    </h2>
                                    <div class="progress inner-shadow">
                                        <div class="progress-bar" style="width: calc(50% - 14px)"></div>
                                        <a href="{{ $ach->pdf }} ">Download </a>
                                    </div>
                                </div>
                            </div>
                            <!-- skill item end -->
                @endif
            @endforeach

                        </div>


                    </div>
            </div>
        </div>
    </section>




        <!-- contact section start -->
        <section class="contact-section section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        <h2 data-heading="contact">معلومات التواصل</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- contact item start -->


                    <div class="contact-item">
                        <div class="contact-item-inner outer-shadow">
                            <i class="fas fa-phone"></i>
                            <span>رقم التليفون</span>
                            <p>{{ $doctor->phone }}</p>
                        </div>
                    </div>
                    <!-- contact item end -->
                    <!-- contact item start -->
                    <div class="contact-item">
                        <div class="contact-item-inner outer-shadow">
                            <i class="fas fa-envelope"></i>
                            <span>الايميل</span>


                            <p>{{ $doctor->email }}</p>
                        </div>
                    </div>
                    <!-- contact item end -->
                    <!-- contact item start -->
                    <div class="contact-item">
                        <div class="contact-item-inner outer-shadow">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>العنوان</span>
                            <p>{{ $doctor->country }}</p>
                        </div>
                    </div>
                    <!-- contact item end -->

        </section>
        <!-- contact section end -->

        <!-- portfolio popup start -->
        <div class="pp portfolio-popup">
            <div class="pp-details">
                <div class="pp-details-inner">
                    <div class="pp-title">
                        <h2></h2>
                        <p> <span class="pp-project-category"></span></p>
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
            <div class="day-night s-icon outer-shadow hover-in-shadow">
                <i class="fas"></i>ss
            </div>
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

    </section>
</body>
<!-- start jquery -->
<script src="./js/jquery-3.6.0.min.js"></script>
<!-- start owl carousel -->

<!-- start bootstrap -->
<script src="./profile-nav-js/jquery.slim.min.js"></script>
<script src="./profile-nav-js/popper.min.js"></script>
<script src="./profile-nav-js/bootstrap.min.js"></script>

<!-- main js -->
<script src="profile-nav-js/main.js"></script>
<!-- style switcher js -->
<script src="profile-nav-js/style-switcher.js"></script>
<script src="profile-nav-js/nav.js"></script>






</body>

</html>

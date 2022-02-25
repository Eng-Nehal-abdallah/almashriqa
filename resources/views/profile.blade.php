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

    <!-- start navbar -->
    <header id="header" dir="rtl" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="/" class="logo"><img src="/icons/Untitled-1.png" alt="" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="/">Butterfly</a></h1> -->

            <nav id="navbar" class="navbar">

                <ul>
                    @guest

                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل الدخول') }}</a>
                            </li>
                            {{-- <li><a href="/login"> تسجيل الدخول </a></li> --}}
                        @endif
                    @else
                        {{-- <li><a href="/logout"> تسجيل الخروج </a></li> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('تسجيل الخروج') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    @endguest
                    <li class="dropdown"><a href="/"><span>الرئيسية</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/about">عن الجامعة</a></li>
                            <li><a href="/leaderuni">رئاسة الجامعة</a></li>
                            <li><a href="/fees">الرسوم الدراسية </a></li>
                            <li><a href="/strategy">ستراتيجية الجامعة </a></li>
                            <li><a href="/facutlydoc">االهيئه التدريسيه</a></li>
                            <li><a href="/agreements">الاتفاقيات ومذكرات التفاهم</a></li>

                            <li><a href="/leaderword">كلمة رئيس الجامعة</a></li>
                            <li><a href="/facutlylab">المختبرات</a></li>
                            <li><a href="/facutlyresearch">الابحاث </a></li>
                            <li><a href="/compuss">الحرم الجامعي</a></li>
                            <li><a class="nav-link scrollto" href="/chart">الاحصائيات </a></li>

                            {{-- <li><a href="/papers">االتقويم الجامعي</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreements"><span>الية التسجيل و القبول</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/mechine">الية التسجيل</a></li>
                            <li><a href="/accept">شروط القبول</a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">استمارة التسجيل</a></li>

                        </ul>
                    </li>




                    <li class="dropdown"><a href="#"><span>كليات</span> <i class="bi bi-chevron-down"></i></a>


                        <ul>
                            @foreach ($faculties as $f)
                                <li class="dropdown"><a href="/Facutly/{{ $f->id }}/show"><span>
                                            {{ $f->name_ar }}</span> <i class="bi bi-chevron-right"></i></a>
                                            <ul> @foreach ($departments as $depart)
                                                @if ($depart->id_facutly == $f->id)

                                                        <li>
                                                            <a href="/department/{{ $depart->id }}/show">{{ $depart->name_ar }}</a>
                                                        </li>

                                                @endif
                                            @endforeach
                                        </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/labexamfac"><span>التعليم الالكتروني</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/facutlylec">جدول المحاضرات الحضورية</a></li>
                            <li><a href="/facutlyexam">جدول الامتحانات الالكترونية</a></li>

                        </ul>
                    </li>

                    <li><a class="nav-link scrollto" href="/magazin">مجلة الجامعة</a></li>
                    <li><a class="nav-link scrollto" href="/papers">التقويم الاكاديمي </a></li>
                    <li><a class="nav-link scrollto" href="/centers">مركز اللغة الانجليزية</a></li>

                    <li><a class="nav-link scrollto" href="/en">EN </a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
            </nav><!-- .navbar -->

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

                    <h2>{{ $doctor->name_ar }}
                    </h2>{{ $doctor->position_ar }}/{{ $doctor->public_specific_ar }}
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
                                        target="_blank"><i class="fab fa-">{{ $ty->name_ar }}</i></a>
                                @endif
                            @endforeach
                        @endforeach


                    </div>
                    <!-- social links end -->
                </div>
                <div class="about-info">
                    <h1 style="color: azure; text-align: center;">
                        {{ $doctor->details_ar }}

                    </h1>
                    <a href="{{ $doctor->pdf }}" class="btn-1 outer-shadow hover-in-shadow"> تنزيل السيرة الذاتية</a>
                    <a href="/d/{{ $doctor->id }}/research" class="btn-1 outer-shadow hover-in-shadow"> تفاصيل
                        الانجازات</a>

                </div>


                <div class="row">
                    <div class="about-tabs">


                    </div>

                    {{-- <div class="skill-item" style="">

            @foreach ($achievementes as $ach)
                @if ($ach->id_doctor == $doctor->id)
                    <!-- skills start -->
                    <div style="bottom: auto;" class="row">
                        <div class="skills ">
                            <div class="row">
                                <!-- skill item start -->
                                <div class="skill-item">
                                    <h2 style="text-align: center;font-size:x-large; color: white;">
                                        {{ $ach->name_ar }} {{ $ach->date }}
                                    </h2>
                                    <h2 style="text-align: center;font-size:x-large; color: white;">
                                        {{ $ach->details_ar }}
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
            </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->





    <!-- contact section start -->
    <section class="contact-section section" id="contact">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2 data-heading="contact">التواصل</h2>
                </div>
            </div>
            <div class="row">
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-phone"></i>
                        <span> رقم الهاتف</span>
                        <p>{{ $doctor->phone }}</p>
                    </div>
                </div>
                <!-- contact item end -->
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-envelope"></i>
                        <span>الايميل</span>
                        <p>{{ $doctor->email }}

                        </p>
                    </div>
                </div>
                <!-- contact item end -->
                <!-- contact item start -->
                <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>العنوان</span>
                        <p>{{ $doctor->country_ar }}</p>
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

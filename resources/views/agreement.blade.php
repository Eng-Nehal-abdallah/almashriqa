<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @extends('layouts.head-ar')
    <link rel="stylesheet" href="/scss/Agreements&Memoranda-of-Understanding.css">



    <!-- start wol js -->

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>


<body class="text-right" dir="rtl">


    <!-- start navbar -->
    <header id="header" dir="rtl" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="/icons/Untitled-1.png" alt=""
                    class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use text as a logo -->
            <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

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
                            <li><a href="/facutly">االهيئه التدريسيه</a></li>
                            <li><a href="/agreements">الاتفاقيات ومذكرات التفاهم</a></li>

                            <li><a href="/leaderword">كلمة رئيس الجامعة</a></li>
                            <li><a href="/facutlylab">المختبرات</a></li>
                            <li><a href="/facutlyresearch">الانجازات </a></li>
                            <li><a href="/compuss">الحرم الجامعي</a></li>
                            <li><a class="nav-link scrollto" href="/chart">الاحصائيات </a></li>

                            {{-- <li><a href="/papers">االتقويم الجامعي</a></li> --}}
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/agreements"><span>الية التسجيل و القبول</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/agreements">الية التسجيل</a></li>
                            <li><a href="/accept">شروط القبول</a></li>
                            <li><a target="_blank" href="https://www.pe-gate.org/">استمارة التسجيل</a></li>

                        </ul>
                    </li>




                    <li class="dropdown"><a href="#"><span>كليات</span> <i class="bi bi-chevron-down"></i></a>


                        <ul>
                            @foreach ($faculties as $f)
                                <li class="dropdown"><a href="/Facutly/{{ $f->id }}/show"><span>
                                            {{ $f->name_ar }}</span> <i class="bi bi-chevron-right"></i></a>
                                    @foreach ($departments as $depart)
                                        @if ($depart->id_facutly == $f->id)
                                            <ul>
                                                <li><a
                                                        href="/department/{{ $depart->id }}/show">{{ $depart->name_ar }}</a>
                                                </li>
                                            </ul>
                                        @endif
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown"><a href="/labexamfac"><span>التعليم الالكتروني</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/facutlylec">جدول المحاضرات الحضورية</a></li>
                            <li><a href="/facutlyexam">جدول الامتحانات الالكترونية</a></li>
                            <li><a href="/labexamfac">جدول الامتحانات العملي الالكترونية</a></li>
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

    <!-- start section 1 -->
    <section class="section-1">
        <div class="container">
            <div class="alert text-center alert-light">
                <h5>ملخص طريقة التقديم على جامعة المشرق 2022/2021</h5>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-12">
                    <ul>
                        <li><i class='bx bx-select-multiple'></i>انشاء حساب شخصي ، حيث ستقوم باختيار اسم مستخدم و كلمة
                            ومرور و تثبت رقم هاتفك الشخصي. </li>

                        <li><i class='bx bx-select-multiple'></i>بعد انشائك للحساب الشخصي ستقوم بتفعيل الخدمات الساندة
                            ضمن الحساب و كما موضح في التعليمات سيرشدك النظام بعد ذلك الى مرحلة ملء البيانات الطلابية حيث
                            ستختار الحالة التي تنطبق عليك ضمن سبعة حالات معدة مسبقا ضمن النظام. </li>
                        <li><i class='bx bx-select-multiple'></i>في حالة احتياجك لعملية التدقيق فسيقوم النظام تلقائيا
                            بتحويلك الى نافذة حجز موعد الكتروني في احد مراكز التدقيق في الجامعات والكليات الاهلية.</li>
                        <li><i class='bx bx-select-multiple'></i>بعد زيارتك لمركز التدقيق ضمن الموعد المثبت لك سيتم
                            مطابقة صحة بياناتك والمصادقة عليها.</li>
                        <li><i class='bx bx-select-multiple'></i>في هذه المرحلة سيعرض لك النظام لوحة تحكم الطالب حيث
                            سيصبح بامكانك تفعيل القنوات الخاصة في حالة استيفائك لشروطها (موضحة في دليل الطالب بالتفصيل)
                            علما ان القناة العامة للتقديم في الكليات الاهلية مفعلة لجميع الطلبة.</li>

                        <li><i class='bx bx-select-multiple'></i>بامكانك في هذه المرحلة البدء بعملية التقديم الالكتروني
                            على الاقسام و الكليات الاهلية الموجودة في النظام من خلال استمارات التقديم الالكترونية.</li>
                        <li><i class='bx bx-select-multiple'></i>ستظهر الاستمارات التي قدمتها ضمن صفحة المعاينة لمعرفة
                            تسلسلك من حيث كونك مرشح اصيل او مرشح احتياط ضمن الطلبة المتقدمين.</li>
                        <li><i class='bx bx-select-multiple'></i>تبدا فترة التسجيل بعد انتهاء فترة التقديم حيث يتم تسجيل
                            الطالب بصورة نهائية في القسم الذي ظهر قبوله فيه.</li>


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End section 1 -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->
    <!-- starting section 1 -->

    <!-- end section 1 -->

    <!--start footer -->

    @extends('layouts.footer-ar')
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

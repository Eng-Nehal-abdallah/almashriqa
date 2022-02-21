@extends('layouts.app')




@section('content')

@extends('layouts.head-ar')
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo"><img src="/icons/Untitled-1.png" alt=""
                class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use text as a logo -->
        <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

        <nav id="navbar" class="navbar">
            <ul>
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
                        <li><a href="/labexamfac">جدول المحاضرات الحضورية</a></li>
                        <li><a href="/labexamfac">جدول الامتحانات الالكترونية</a></li>

                    </ul>
                </li>
                <li><a class="nav-link scrollto " href="/facutlyresearch"> الانشطه</a></li>
                <li><a class="nav-link scrollto" href="/magazin">مجلة الجامعة</a></li>
                <li><a class="nav-link scrollto" href="/papers">التقويم الاكاديمي </a></li>
                <li><a class="nav-link scrollto" href="/centers">مركز اللغة الانجليزية</a></li>

                <li><a class="nav-link scrollto" href="/en">اللغة </a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle fas fa-menu-bar"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

    <h3>{{ __('message.welcome') }}</h3>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <title>Elmashriq</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">

            <div class="list-group list-group-flush my-3">
                <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-university  "></i>main paig</a>
                <a href="/dashboard2"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-university  "></i>
                    Faculty</a>
                <a href="/dashboard3"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-tachometer-alt me-2"></i>Department</a>
                <a href="/dashboard4"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Doctors</a>

                <a href="/dashboard5"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>Activities</a>
                <a href="/dashboard6"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-gift me-2"></i>انواع انجازات الدكتور</a>
                <a href="/dashboard7"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>انواع التواصل</a>
                <a href="/dashboard8"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-comment-dots me-2"></i>جدول المحاضرات </a>
                <a href="/dashboard9"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>جدول العملي</a>
                <a href="/dashboard10"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>جدول الامتحانات النهائي</a>
                <a href="/dashboard11"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>اداره الاقسام لجامعه</a>
                <a href="/dashboard13"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2">المعامل</i></a>
                <a href="/dashboard15"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2">الانفاقيات الجامعيه</i></a>
                <a href="/dashboard14"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> الحرم الجامعي</i></a>
                <a href="/dashboard15"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> التقويم الاكاديمي </i></a>
                <a href="/dashboard16"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> مركز اللغه الانجليزيه </i></a>
                <a href="/dashboard17"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> مجلة الجامعة</i></a>
                <a href="/dashboard18"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> معدل القبول و الاقساط
                    </i></a>
                    <a href="/dashboard22"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> وسائط متعددة
                    </i></a>
                    <a href="/dashboard25"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2">  رئيس ومساعدين الجامعة
                    </i></a>
                    <a href="/dashboard26"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> عمداء ومعاونين ومقررين الكليات
                    </i></a>
                    <a href="/dashboard27"
                    class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"> ملفات للمجله pdf
                    </i></a>

            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Elmashriq</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>person name
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class=" container-fluid px-4">
                <div class="row h1 g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 inner   shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">{{ $doctors->count(); }}</h3>
                                <p class="fs-5">Doctors</p>
                            </div>
                            <i class="fas fa-users fs-1 "></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 inner2  shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">{{ $mash->students }}</h3>
                                <p class="fs-5">Students</p>
                            </div>
                            <i class="fas fa-user-graduate fs-1 "></i>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="p-3 inner3  shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">{{ $f->count(); }}</h3>
                                <p class="fs-5">Colleage</p>
                            </div>
                            <i class="fas fa-university fs-1 "></i>
                        </div>
                    </div>


                </div>
                <!-- start seection 2 -->




                <!-- start seection 2 -->
                <div class="table-responsive-md">
                    <div class="row section-2 my-5">
                        <h3 class="text-light">After head</h3>

                        <div class="col bg-light rounded shadow-sm">
                            <table class="table table-light section-2 ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>

                                        <th scope="col"> عنوان الصفحه الرئيسيه بالعربي</th>
                                        <th scope="col">   عنوان الصفحه الرئيسيه بالانجليزي</th>
                                        <th scope="col"> النص الكبير بالعربي</th>
                                        <th scope="col"> النص الكبير بالانجليزي</th>
                                        <th scope="col">استراتيجيه بالعربي</th>
                                        <th scope="col">استراتيجيه بالانجليزي</th>
                                        <th scope="col">كلمة رئيس الجامعه بالعربي</th>
                                        <th scope="col">كلمة رئيس الجامعه بالانجليزي</th>
                                        <th scope="col">جدول الرسوم بالعربي</th>
                                        <th scope="col">جدول الرسوم بالانجليزي</th>
                                        <th scope="col">عدد الطلاب</th>
                                        <th scope="col">عدد القاعات التدريسية</th>
                                        <th scope="col">صورة رئيس الجامعه</th>
                                        <th scope="col">ملف استراتيجية</th>
                                        <th scope="col">action</th>

                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $mash->abstract_title_ar }}</td>
                                        <td>{{ $mash->abstract_title_en }}</td>

                                        <td>{{ $mash->abstract_details_ar }}</td>
                                        <td>{{ $mash->abstract_details_en }}</td>
                                        <td>{{ $mash->strategy_ar }}</td>
                                        <td>{{ $mash->strategy_en }}</td>
                                        <td>{{ $mash->word_ar }}</td>
                                        <td>{{ $mash->word_En }}</td>

                                        <td>{{ $mash->fees_ar }}</td>
                                        <td>{{ $mash->fees_en }}</td>

                                        <td>{{ $mash->students }}</td>
                                        <td>{{ $mash->room }}</td>
                                        <td><img src="/{{ $mash->leaderimage }}" width="100" height="100" alt="image"></td>
                                        <td><a href="{{  $mash->pdf}}">download</a></td>
                                        <td><a class="btn shadow-sm btn-dark"
                                                href="/mashes/{{ $mash->id }}/edit">edit</a></td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <!-- end section 2 -->

                <!-- start section 3 -->
                <div class="table-responsive-md">
                    <div class="row section-2 my-5">
                        <h3 class="text-light">section 1</h3>
                        <div class="col bg-light rounded shadow-sm">
                            <table class="table table-light section-2 ">
                                <thead>
                                    <tr>

                                        <th scope="col">img</th>
                                        <th scope="col">head_ar</th>
                                        <th scope="col">head_en</th>
                                        <th scope="col">small_ar</th>
                                        <th scope="col">small_en</th>
                                        <th scope="col">paragraph_ar</th>
                                        <th scope="col">paragraph_en</th>




                                        <th scope="col">action</th>


                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><img src="{{ $mash->image2 }}" width="100" height="100" alt=""></td>
                                        <td>{{ $mash->title_image2_ar }}</td>
                                        <td>{{ $mash->title_image2_en }}</td>
                                        <td>{{ $mash->small_image2_ar }}</td>
                                        <td>{{ $mash->small_image2_en }}</td>
                                        <td>{{ $mash->details_image2_ar }}</td>
                                        <td>{{ $mash->details_image2_en }}</td>


                                        <td><a class="btn shadow-sm btn-dark"
                                                href="/mash2/{{ $mash->id }}/edit">edit</a></td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <!-- start section 5 -->
                <div class="table-responsive-md">
                    <div class="row section-5 my-5">
                        <h3 class="text-light">section 3</h3>

                        <div class="col bg-light rounded shadow-sm">
                            <table class="table table-light section-2 ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">img</th>
                                        <th scope="col">head_ar</th>
                                        <th scope="col">head_en</th>
                                        <th scope="col">small_ar</th>
                                        <th scope="col">small_en</th>
                                        <th scope="col">paragraph_ar</th>
                                        <th scope="col">paragraph_en</th>
                                        <th scope="col">button</th>


                                        <th scope="col">action</th>


                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><img src="{{ $mash->image1 }}" width="100" height="100" alt=""></td>
                                        <td>{{ $mash->title_image1_ar }}</td>
                                        <td>{{ $mash->title_image1_en }}</td>
                                        <td>{{ $mash->small_image1_ar }}</td>
                                        <td>{{ $mash->small_image1_en }}</td>
                                        <td>{{ $mash->details_image1_ar }}</td>
                                        <td>{{ $mash->details_image1_en }}</td>
                                        <td>{{ $mash->link_image1_ar }}</td>



                                        <td><a class="btn shadow-sm btn-dark"
                                                href="/mash3/{{ $mash->id }}/edit">edit</a></td>

                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function() {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>

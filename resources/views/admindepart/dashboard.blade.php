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
    <div class="bg-white" id="sidebar-wrapper">

        <div class="list-group list-group-flush my-3">
            <a href="/dashboard" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-university  "></i>main paig</a>
            <a href="/dashboard2"class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
              class="fas fa-university  "></i>
             Faculty</a>
             <a href="/dashboard3"  class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-tachometer-alt me-2"></i>Department</a>
            <a href="/dashboard4" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
              class="fas fa-chart-line me-2"></i>Doctors</a>

            <a href="/dashboard5" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
              class="fas fa-shopping-cart me-2"></i>Activities</a>
              <a href="/dashboard6" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-gift me-2"></i>انواع انجازات الدكتور</a>
              <a href="/dashboard7" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-comment-dots me-2"></i>انواع التواصل</a>
                <a href="/dashboard8" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-comment-dots me-2"></i>جدول المحاضرات </a>
                <a href="/dashboard9" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-map-marker-alt me-2"></i>جدول العملي</a>
                    <a href="/dashboard10" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2"></i>جدول الامتحانات النهائي</a>
                        <a href="/dashboard11"  class="list-group-item list-group-item-action bg-transparent second-text active"><i
                            class="fas fa-map-marker-alt me-2"></i>اداره الاقسام لجامعه</a>
                <a href="/dashboard13" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-map-marker-alt me-2">المعامل</i></a>
                    <a href="/dashboard15" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-map-marker-alt me-2">الانفاقيات الجامعيه</i></a>
           <a href="/dashboard14" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-map-marker-alt me-2"> الحرم الجامعي</i></a>
                   <a href="/dashboard15"class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-map-marker-alt me-2">  التقويم الاكاديمي  </i></a>
                   <a href="/dashboard16" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-map-marker-alt me-2"> مركز اللغه الانجليزيه </i></a>
                   <a href="/dashboard17" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-map-marker-alt me-2"> مجلة الجامعة</i></a>
                   <a href="/dashboard18" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-chart-line me-2"> معدل القبول و الاقساط
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

<a href="/dashboard28"
     class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
         class="fas fa-map-marker-alt me-2">  الاليات التسجيل
     </i></a>

       </div>
      </div>

  <!-- Page Content -->
  <div id="page-content-wrapper">
   <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
    <div class="d-flex align-items-center">
     <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
     <h2 class="fs-2 m-0">Elmashriq</h2>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-user me-2"></i>person name
       </a>
       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">



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

    <a class="btn shadow-sm btn-dark" href="/insert_type">Add</a>

    <!-- start seection 2 -->
    <div class="table-responsive-md">
     <div class="row section-2 my-5">
      <h3 class="text-light">After head</h3>

      <div class="col bg-light rounded shadow-sm">
       <table class="table table-light section-2 ">
        <thead>
         <tr>
          <th scope="col">#</th>

          <th scope="col">Name ar</th>
          <th scope="col">Name en</th>
          <th scope="col">Details ar</th>
          <th scope="col">Details en</th>
          <th scope="col">tablecode</th>
          <th scope="col">Edit</th>



         </tr>
        </thead>
        <tbody class="text-dark">

         <tr>
          <th scope="row">#</th>



          <td>{{ $admin->name_ar }}</td>
          <td>{{ $admin->name_en }}</td>
          <td>{{ $admin->details_ar }}</td>
          <td>{{ $admin->details_en }}</td>

          <td>{{ $admin->tablecode }}</td>
<td><a href="/admindepart/{{ $admin->id }}/edit">Edit</a></td>
         <br>


         </tr>

        </tbody>
       </table>

      </div>
     </div>
    </div>


 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
 <script>
  var el = document.getElementById("wrapper");
  var toggleButton = document.getElementById("menu-toggle");

  toggleButton.onclick = function () {
   el.classList.toggle("toggled");
  };
 </script>
</body>

</html>

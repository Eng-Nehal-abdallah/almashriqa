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

  <!-- /#sidebar-wrapper -->

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
        <h3 class="fs-2">126</h3>
        <p class="fs-5">Doctors</p>
       </div>
       <i class="fas fa-users fs-1 "></i>
      </div>
     </div>

     <div class="col-md-4">
      <div class="p-3 inner2  shadow-sm d-flex justify-content-around align-items-center rounded">
       <div>
        <h3 class="fs-2">4920</h3>
        <p class="fs-5">Students</p>
       </div>
       <i class="fas fa-user-graduate fs-1 "></i>
      </div>
     </div>

     <div class="col-md-4">
      <div class="p-3 inner3  shadow-sm d-flex justify-content-around align-items-center rounded">
       <div>
        <h3 class="fs-2">3899</h3>
        <p class="fs-5">Colleage</p>
       </div>
       <i class="fas fa-university fs-1 "></i>
      </div>
     </div>
    </div>

    {{-- </div>
    <!-- start seection 2 -->
    <div class="table-responsive-md">
     <div class="row section-2 my-5">
      <h3 class="fs-4 main mb-3">Head page</h3>
      <h3 class="text-light">header</h3>

      <div class="col bg-light rounded shadow-sm">
       <table class="table table-light section-2 ">
        <thead>
         <tr>
          <th scope="col">#</th>
          <th scope="col">img</th>
          <th scope="col">head</th>
          <th scope="col">small</th>
          <th scope="col">action</th>

         </tr>
        </thead>
        <tbody class="text-dark">
         <tr>
          <th scope="row">1</th>
          <td><img src="./imgs/header.png" alt=""></td>
          <td>Otto</td>
          <td>@mdo</td>
          <td><a class="btn shadow-sm btn-dark" href="">edit</a></td>

         </tr>

        </tbody>
       </table>

      </div>
     </div>
    </div> --}}

    <a class="btn shadow-sm btn-dark" href="/studentadd">Add</a>

    <!-- start seection 2 -->
    <div class="table-responsive-xl">
     <div class="row section-2 my-5">
      <h3 class="text-light">After head</h3>

      <div style="overflow-x: auto;" class="col bg-light rounded shadow-sm">
       <table class="table table-light section-2 ">
        <thead>
         <tr>
          <th scope="col">#</th>

          <th scope="col"> Image</th>
          <th scope="col">Name ar</th>
          <th scope="col">Name en</th>
          <th scope="col">level_ar</th>
          <th scope="col">leve_en</th>
          <th scope="col">garde_ar</th>
          <th scope="col">grade_en</th>

          <th scope="col">faculty</th>
          <th scope="col"> department</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
         </tr>
        </thead>
        <tbody class="text-dark">
            @foreach ($students as $data )

         <tr>
          <th scope="row">#</th>
          <td><img src="/{{ $data->image }}" width="100" height="100" alt="image"></td> <td>{{$data->image }}</td>

          <td>{{$data->name_ar }}</td>
          <td>{{$data->name_en }}</td>

          <td>{{$data->level_ar }}</td>

          <td>{{$data->level_en }}</td>




          <td>{{$data->garde_ar }}</td>



          <td>{{$data->grade_en }}</td>


          <td>
            @foreach($facutlies as $f)
            @if($f->id==$data->id_facutly)
           {{ $f->name_ar }}
            @endif
            @endforeach
          </td>
          <td>
              @foreach($departments as $d)
              @if($d->id==$data->id_department)
             {{ $d->name_ar }}
              @endif
              @endforeach
            </td>





          <td><a class="btn shadow-sm btn-dark" href="/student/{{ $data->id }}/edit">edit</a></td>
<td> <form method="post" action="/ students/{{ $data->id }}">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger m-1" value="delete" />

</form></td>
         </tr>

         @endforeach
        </tbody>
       </table>

      </div>
     </div>
    </div>

    <!-- end section 2 -->



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

    <footer dir="ltr" class="" id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4> روابط مهمة</h4>
                        <hr class="tet">
                        <p class="first ">
                            <br><a class=" text-warning" href=" https://uobaghdad.edu.iq/">جامعة بفداد</a>
                            <br><a class=" text-warning" href=" https://nahrainuniv.edu.iq/">جامعة النهرين</a>
                            <br><a class=" text-warning" href="https://www.uotechnology.edu.iq/index.php/ar">جامعة التكنولوجية</a>
                            <br>

                        </p>


                    </div>
                    <div class="col-lg-2 text-right col-md-6 footer-links">
                        <h4>الباحث العلمي</h4>
                        <hr class="tet">
                        <ul >
                            <li ><i class="bx text-warning bx-chevron-right"></i> <a class="text-warning"
                                    href="https://scholar.google.com/citations?hl=en&authuser=2&view_op=search_authors&mauthors=uom.edu.iq&btnG=">scholar</a>
                            </li>
                            <li ><i class="bx text-warning bx-chevron-right"></i> <a class="text-warning"
                                    href="https://www.researchgate.net/">researchgate</a></li>
                            <li ><i class="bx text-warning bx-chevron-right"></i> <a class="text-warning" href="https://www.scopus.com/">scopus</a></li>
                            <li ><i class="bx text-warning bx-chevron-right"></i> <a class="text-warning" href="https://publons.com/">publons</a></li>
                            <li ><i class="bx text-warning bx-chevron-right"></i> <a class="text-warning" href="https://orcid.org/">orcid</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>اتصل بنا</h4>
                        <hr class="tet">

              <div class="container">

        {{-- <h2>Send e-mail to someone@example.com:</h2> --}}
    @if(count($errors)>0)
    <div class="alert alert-danger">

      <button type="btn btn-light" class="close" data-dismiss="alert">x</button>
      <ul>
        @foreach ($errors->all() as $error )
          <span class="alert alert-danger">{{$error}}</span>
        @endforeach
      </ul>
    @endif
    @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <button type="btn btn-light" class="close" data-dismiss="alert">x</button>
      <strong>{{$message}}</strong>
    @endif
    <form action='send' method="POST" >
      @csrf
    الاسم<br>
    <input type="text" class="form-control" id="name" name="name"><br>
    الايميل<br>
    <input type="text" class="form-control" id="email" name="email"><br>
    الرسالة<br>
    <input type="text" class="form-control" id="message" name="message" size="50"><br><br>
    <input  class="btn btn-warning" type="submit" class="form-control" value="Send">
    {{-- <input type="reset" class="form-control" value="Reset"> --}}
    </form>
    {{-- <hr>
    <h4 class="border-bottom py-3 btn-block">تسجيل دخول </h4> --}}

    </ul>

    {{-- <ul class="navbar-nav ms-auto">
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                    {{ Auth::user()->id }}
                </a>


                    <a class="dropdown-item btn btn-dark" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

            </li>
        @endguest
    </ul> --}}
  </div>


                        </form>
                    </div>



                    <div class="col-lg-3 col-md-6 text-right  footer-links">
                        <h4>معلومات الاتصال</h4>
                        <hr class="tet">
                        <p>
                            <strong class="my-1 ">Phone:</strong>
                            <br>
                            07800226006<i class="fas fa-phone"></i>
                            <br>
                            07800224004<i class="fas fa-phone"></i>
                            <br>
                            07805999100<i class="fas fa-phone"></i>
                            <br>
                            6440<i class="fas fa-phone"></i>
                            <br>
                            <strong>Email:</strong>
                        <p href="#">Info@uom.edu.iq<i class="fas fa-envelope-open-text"></i></p>

                        </p>
                    </div>

                </div>
            </div>
        </div>


    </footer>

@extends('layouts.app')



@section('content')

<div class="container">
    <img class="wave" src="./form img/wave.png" alt="">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 text-center ">create rewards</h2>

        </div>

        <div class="row justify-content-around">


    {{-- ////////////////// --}}
    <form action="/research" method="POST" >
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">name_ar</label>
            <input type="text" class="form-control" name='name_ar' id='name_ar' >
          </div>
          <div class="form-group col-md-6">
            <label for="input">name_en</label>
            <input type="text" class="form-control" id='name_en' name='name_en'>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label for="input">Details_Ar</label>
            <input type="text" class="form-control" id='details_ar' name='details_ar'>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label for="input">Details_EN</label>
            <input type="text" class="form-control" id='details_en' name='details_en'>
          </div>
        </div>
        <div class="form-group">
            <label for="link">pdf</label>
            <input type="file" class="form-control" name='link'  id='link'>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="input">facutly_ar</label>
            <input type="text" class="form-control"  id='facutly_ar' name='facutly_ar' >
          </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="input">facutly_en</label>
              <input type="text" class="form-control"  id='facutly_en' name='facutly_en' >
            </div>

          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="input">university_ar</label>
              <input type="text" class="form-control"  id='university_ar' name='university_ar' >
            </div>

          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="input">university_en</label>
                <input type="text" class="form-control"  id='university_en' name='university_en' >
              </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="input">Type</label>
                  <input type="text" class="form-control"  id='type' name='type' >
                </div>

              </div>


        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>

        </div>


    <script src="./js/main.js"></script>

    @endsection

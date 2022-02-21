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
    <form action="{{ route('exam') }}"  enctype="multipart/form-data"  method="POST" >
        @csrf


          <div class="form-group col-md-6">
            <label for="inputEmail4">lecture</label>
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea"  name="lecture" required></textarea>

          </div>

          <div class="form-group col-md-6">
            <label for="input">Day</label>
            <select name="day" id="day" class="form-select">
              <option value="">Select type</option>

              <option value="السبت">السبت</option>
              <option value="الاحد">الاحد</option>
              <option value="الاثنين">الاثنين</option>
              <option value="الثلاثاء">الثلاثاء</option>
              <option value="الاربعاء">الاربعاء</option>
              <option value="الخميس">الخميس</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>

        </div>

    <script src="./js/main.js"></script>

    @endsection

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
    <form action="{{ route('labexam') }}"  enctype="multipart/form-data"  method="POST" >
        @csrf
        <input type="text" class="form-control" id='id_facutly' hidden name='id_facutly' value="{{$facutly->id}}">

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

          <div class="form-group col-md-6">
            <label for="input">Day</label>
            <select name="day" id="day" class="form-select">
              <option value="">Select type</option>

       
            <option value="saturday">day</option>
            <option value="saturday">saturday</option>
                <option value="sunday">sunday</option>
                <option value="monday">monday</option>
                <option value="Tuesday">Tuesday</option>
                 <option value="Wednesday">Wednesday</option>
                 <option value="الخميس">Thursday</option>
        </select>
          </div>

          <div class="form-group col-md-6">
            <label for="input">Departments</label>
           
                
           
            <select name="id_department" id="day" class="form-select">
                
              <option value="">Select department</option>
              @foreach ($departments as $d)
       @if($d->id_facutly== $facutly->id)
            <option value="{{ $d->id }}">{{ $d->name_ar }}</option>
          @endif
                 @endforeach
        </select>
          </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>

        </div>

    <script src="./js/main.js"></script>

    @endsection

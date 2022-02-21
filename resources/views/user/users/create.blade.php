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
    <form action="{{ route('user') }}"  enctype="multipart/form-data"  method="POST" >
        @csrf
        <div class="form-group col-md-6">
            <label for="name">الاسم</label>
            <input type="text" class="form-control" name='name' id='name'>
        </div>
        <div class="form-group col-md-6">
            <label for="name">الايميل</label>
            <input type="email" class="form-control" name='email' id='email'>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">رقم السري</label>
                <input type="password" class="form-control" id='password' name='password'>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">رقم السري اعادة </label>
                <input type="password" class="form-control" id='pass' name='pass'>
            </div>
        </div>
        <div class="form-group col-md-6">
            <select id="country" name="id_facutly" class="form-control">
                <option value="">الكلية</option>
                @foreach ($facutlies as $list)
                    <option value="{{ $list->id }}">{{ $list->name_ar }}</option>
                @endforeach
            </select>
            </div>


          <div class="form-group col-md-6">
            <label for="input">صلاحية المسجل</label>
            <select name="usertype" id="day" class="form-select">
              <option value="">Select type</option>

              <option value="admin">ادمن</option>
              <option value="student">طالب</option>
              <option value="doctor">كادر تدريسي</option>
              <option value="facutly">كلية</option>

            </select>
          </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>

        </div>

    <script src="./js/main.js"></script>

    @endsection

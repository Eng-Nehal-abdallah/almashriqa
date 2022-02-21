@extends('layouts.app')


@section('content')
    <!DOCTYPE html>

    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container">

        </div>

        <div class="container">
            <form method="POST" enctype="multipart/form-data" action="/labexam/{{ $lecture->id }}">
                @csrf
                @method('PUT')
                <input type="text" class="form-control" id='level_ar' hidden name='level_ar' value="{{  $lecture->id_faculty}}">
                <div class="form-group">
                    <label for="title">lecture</label>
                    <textarea class="form-control is-invalid" id="validationTextarea"  required>{{ $lecture->lecture }} </textarea>


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
                    <select name="dayثى" id="dayثى" class="form-select">
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
                <input type="submit" class="btn btn-primary" value="update" />
                <a href="/dashboard" class="btn bg-gray">cancel</a>
            </form>

        </div>



    </body>

    </html>
@endsection

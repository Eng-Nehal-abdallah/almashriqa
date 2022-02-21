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
            <form method="POST" enctype="multipart/form-data" action="/exam/{{ $exam->id }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">lecture</label>
                    <textarea class="form-control is-invalid" id="validationTextarea"  required>{{ $exam->lecture }} </textarea>


                </div>

                <div class="form-group col-md-6">
                    <label for="input">Day</label>
                    <select name="day" id="day" class="form-select">
                      <option value="{{ $exam->day }}">Select type</option>

                      <option value="السبت">السبت</option>
                      <option value="الاحد">الاحد</option>
                      <option value="الاثنين">الاثنين</option>
                      <option value="الثلاثاء">الثلاثاء</option>
                      <option value="الاربعاء">الاربعاء</option>
                      <option value="الخميس">الخميس</option>




                    </select>
                  </div>
                <input type="submit" class="btn btn-primary" value="update" />
                <a href="/dashboard" class="btn bg-gray">cancel</a>
            </form>

        </div>



    </body>

    </html>
@endsection

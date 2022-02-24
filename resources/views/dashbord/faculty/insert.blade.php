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
        <form method="POST"  enctype="multipart/form-data" action="/create_faculty">

            @method('POST')
            @csrf


            <div class="form-group">
                <label for="title">image</label>

                <input type="file"  accept="image/*" class="custom-file-input" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">name_ar</label>
                <input type="text" class="form-control" id="name_ar" name="name_ar"  />
            </div>
            <div class="form-group">
                <label for="content">Name_en</label>
                <input type="text" class="form-control" name="name_en" id="name_en"  />
            </div>
            <div class="form-group">
                <label for="title">message_ar </label>
                <input type="text" class="form-control" id="message_ar" name="message_ar"  />
            </div>
            <div class="form-group">
                <label for="title">message_en </label>
                <input type="text" class="form-control" id="message_en" name="message_en" />
            </div>

            <div class="form-group">
                <label for="title">	view_en </label>
                <input type="text" class="form-control" id="view_ar" name="view_en"  />
            </div>
            <div class="form-group">
                <label for="title">view_ar 	 </label>
                <input type="text" class="form-control" id="view_ar"	 name="view_ar" />
            </div>


            <div class="form-group">
                <label for="title">	goal_ar </label>
                <input type="text" class="form-control" id="goal_ar" name="goal_ar"  />
            </div>
            <div class="form-group">
                <label for="title">goal_en 	 </label>
                <input type="text" class="form-control" id="goal_en"	  name="goal_en" />
            </div>

            <div class="form-group">
                <label for="title">	about_facutly_ar </label>
                <input type="text" class="form-control" id="about_facutly_ar" name="about_facutly_ar"  />
            </div>
            <div class="form-group">
                <label for="title">about_facutly_en 	 </label>
                <input type="text" class="form-control" id="about_facutly_en"	 name="about_facutly_en" />
            </div>

            <div class="form-group">
                <label for="title">	message_dean_ar </label>
                <input type="text" class="form-control" id="message_dean_ar" name="message_dean_ar"  />
            </div>
            <div class="form-group">
                <label for="title">message_dean_en	 	 </label>
                <input type="text" class="form-control" id="message_dean_en	"	 name="message_dean_en" />
            </div>
            <div class="form-group">
                <label for="title">Color</label>
                <input type="color" id="color" name="color">

            </div>
            <input type="submit" class="btn btn-primary" value="Add"/>
            <a href="/dashboard" class="btn bg-gray">cancel</a>
        </form>
        <br>

    </div>



</body>
</html>
@endsection

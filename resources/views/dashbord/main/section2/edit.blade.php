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
        <form method="POST" enctype="multipart/form-data" action="/mash3/{{ $mash->id }}">

            @method('PUT')
            @csrf

            <img src="/{{$mash->image1 }}" width="100" height="100" alt="image">
            <div class="form-group">
                <label for="title">image</label>

<h5>change</h5>
                <input type="file" class="custom-file-input" id="image1" name="image1">
            </div>
            <div class="form-group">
                <label for="title">title_image2_ar</label>
                <input type="text" class="form-control" id="title_image1_ar" name="title_image1_ar" value="{{  $mash->title_image1_ar}}" />
            </div>
            <div class="form-group">
                <label for="content">title_image2_en</label>
                <input type="text" class="form-control" name="title_image1_en" id="title_image1_en" value="{{ $mash->title_image1_en  }}" />
            </div>
            <div class="form-group">
                <label for="title">small_image2_ar </label>
                <input type="text" class="form-control" id="small_image1_ar" name="small_image1_ar" value="{{  $mash->small_image1_ar }}" />
            </div>
            <div class="form-group">
                <label for="title">small_image2_en </label>
                <input type="text" class="form-control" id="small_image1_en" value="{{  $mash->small_image1_en}}" name="small_image1_en" />
            </div>

            <div class="form-group">
                <label for="title">details_image1_ar </label>
                <input type="text" class="form-control" id="details_image1_ar" name="details_image1_ar" value="{{  $mash->details_image1_ar}}" />
            </div>
            <div class="form-group">
                <label for="title">details_image2_en 	 </label>
                <input type="text" class="form-control" id="details_image1_en"	 value="{{  $mash->details_image1_en}}" name="details_image1_en" />
            </div>
            <input type="submit" class="btn btn-primary" value="update"/>
            <a href="/dashboard" class="btn bg-gray">cancel</a>
        </form>
        <br>


    </div>



</body>
</html>
@endsection

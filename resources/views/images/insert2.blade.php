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
        <form method="POST"  enctype="multipart/form-data" action="/create_activity1">

            @method('POST')
            @csrf

            <input type="text" class="form-control" hidden name='id_activity' id='id_activity' value="{{ $activity->id }}">
            <div class="form-group">
                <label for="title">image</label>

                <input type="file"  accept="image/*" class="custom-file-input" id="image" name="image">
            </div>

            <input type="submit" class="btn btn-primary" value="Add"/>

        </form>
        <br>

    </div>



</body>
</html>
@endsection

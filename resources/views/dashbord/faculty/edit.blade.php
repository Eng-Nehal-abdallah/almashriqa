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
            <form method="POST" enctype="multipart/form-data" action="/facutly/{{ $facutly->id }}">

                @method('PUT')
                @csrf

                <img src="/{{ $facutly->image }}" width="100" height="100" alt="image">
                <div class="form-group">
                    <label for="title">image</label>

                    <h5>change</h5>
                    <input type="file" accept="image/*" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="title">name_ar</label>
                    <input type="text" class="form-control" id="name_ar" name="name_ar"
                        value="{{ $facutly->name_ar }}" />
                </div>
                <div class="form-group">
                    <label for="content">Name_en</label>
                    <input type="text" class="form-control" name="name_en" id="name_en"
                        value="{{ $facutly->name_en }}" />
                </div>
                <div class="form-group">
                    <label for="title">message_ar </label>
                    <input type="text" class="form-control" id="message_ar" name="message_ar"
                        value="{{ $facutly->message_ar }}" />
                </div>
                <div class="form-group">
                    <label for="title">message_en </label>
                    <input type="text" class="form-control" id="message_en" value="{{ $facutly->message_en }}"
                        name="message_en" />
                </div>

                <div class="form-group">
                    <label for="title"> view_en </label>
                    <input type="text" class="form-control" id="view_ar" name="view_en"
                        value="{{ $facutly->view_en }}" />
                </div>
                <div class="form-group">
                    <label for="title">view_ar </label>
                    <input type="text" class="form-control" id="view_ar" value="{{ $facutly->view_ar }}"
                        name="view_ar" />
                </div>


                <div class="form-group">
                    <label for="title"> goal_ar </label>
                    <input type="text" class="form-control" id="goal_ar" name="goal_ar"
                        value="{{ $facutly->goal_ar }}" />
                </div>
                <div class="form-group">
                    <label for="title">goal_en </label>
                    <input type="text" class="form-control" id="goal_en" value="{{ $facutly->goal_en }}"
                        name="view_ar" />
                </div>

                <div class="form-group">
                    <label for="title"> about_facutly_ar </label>
                    <input type="text" class="form-control" id="about_facutly_ar" name="about_facutly_ar"
                        value="{{ $facutly->about_facutly_ar }}" />
                </div>
                <div class="form-group">
                    <label for="title">about_facutly_en </label>
                    <input type="text" class="form-control" id="about_facutly_en"
                        value="{{ $facutly->about_facutly_en }}" name="about_facutly_en" />
                </div>

                <div class="form-group">
                    <label for="title"> message_dean_ar </label>
                    <input type="text" class="form-control" id="message_dean_ar" name="message_dean_ar"
                        value="{{ $facutly->view_en }}" />
                </div>
                <div class="form-group">
                    <label for="title">message_dean_en </label>
                    <input type="text" class="form-control" id="message_dean_en	"
                        value="{{ $facutly->message_dean_en }}" name="view_ar" />
                </div>
                <div class="form-group">
                    <label for="title">Color</label>
                    <input type="color" id="color" name="color">

                </div>
                <input type="submit" class="btn btn-primary" value="update" />
                <a href="/dashboard" class="btn bg-gray">cancel</a>
            </form>
            <br>



            <form method="post" action="/facutly/{{ $facutly->id }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="delete" />

            </form>
        </div>



    </body>

    </html>
@endsection

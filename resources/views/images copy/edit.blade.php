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
            <form method="POST" enctype="multipart/form-data" action="/pdf/{{ $pdf->id }}">

                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">الاسم بالعربي</label>
                    <input type="text" class="form-control is-invalid" id="name_ar" name="name_ar" required value="{{ $pdf->name_ar }}" />


                </div>
                <div class="form-group">
                    <label for="title">الاسم بالانجليزي</label>
                    <input type="text" class="form-control is-invalid" id="name_en" name="name_en" required value="{{ $pdf->name_en }}"  />


                </div>


                <div class="form-group">
                    <label for="title">pdf</label>

                    <h5>change</h5>
                    <input type="file" accept="pdf/*" id="pdf" name="pdf">
                </div>
                <input type="submit" class="btn btn-primary" value="Update/>
            </form>




        </div>



    </body>

    </html>
@endsection

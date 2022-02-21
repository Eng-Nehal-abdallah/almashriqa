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
            <form method="POST" enctype="multipart/form-data" action="/updateadmin/{{ $admindepart->id }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title"> الاسم</label>
                    <input type="text" class="form-control is-invalid" id="validationTextarea" name="name_ar" required value="{{ $admindepart->name_ar }}"" />


                </div>
                <div class="form-group">
                    <label for="title"> التفاصيل</label>
                    <input type="text" class="form-control is-invalid" id="validationTextarea" name="details_ar" required value="{{ $admindepart->details_ar }}"" />


                </div>
                <div class="form-group">
                    <label for="title"> name </label>
                    <input type="text" class="form-control is-invalid" id="validationTextarea" name="name_en" required value="{{ $admindepart->name_en }}"" />


                </div>
                <div class="form-group">
                    <label for="title"> details</label>
                    <input type="text" class="form-control is-invalid" id="validationTextarea" name="details_en" required value="{{ $admindepart->details_en}}"" />


                </div>
                <div class="form-group">
                    <label for="title">Table code</label>
                    <textarea class="form-control is-invalid" id="validationTextarea" name="tablecode" required>{{ $admindepart->tablecode }} </textarea>


                </div>


                <input type="submit" class="btn btn-primary" value="update" />
                <a href="/dashboard" class="btn bg-gray">cancel</a>
            </form>

        </div>



    </body>

    </html>
@endsection

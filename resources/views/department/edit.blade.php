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
            <form method="POST" enctype="multipart/form-data" action="/department/{{ $department->id }}">
                @csrf
                @method('PUT')


                <img src="/{{ $department->image }}" width="100" height="100" alt="image">
                <div class="form-group">
                    <label for="title">image</label>

                    <h5>change</h5>
                    <input type="file" accept="image/*" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="title">name_ar</label>
                    <input type="text" class="form-control" id="name_ar" name="name_ar"
                        value="{{ $department->name_ar }}" />
                </div>
                <div class="form-group">
                    <label for="content">Name_en</label>
                    <input type="text" class="form-control" name="name_en" id="name_en"
                        value="{{ $department->name_en }}" />
                </div>
                <div class="form-group">
                    <label for="title">Details ar </label>
                    <input type="text" class="form-control" id="details_ar" name="details_ar"
                        value="{{ $department->details_ar }}" />
                </div>
                <div class="form-group">
                    <label for="title">Details en </label>
                    <input type="text" class="form-control" id="details_en" value="{{ $department->details_en }}"
                        name="details_en" />
                </div>

                <div class="form-group">
                    <label for="title">color </label>
                    <input type="color"  id="coor" name="color" />
                </div>
                <div class="form-group col-md-6">
                    <select name="id_facutly" id="id_facutly" class="form-select">
                        <option value="">Select University</option>
                        @foreach ($facutlies as $fac)
                            <option value="{{ $fac->id }}">{{ $fac['name_ar'] }}</option>
                        @endforeach
                    </select>
                </div>


                <input type="submit" class="btn btn-primary" value="update" />
                <a href="/dashboard" class="btn bg-gray">cancel</a>
            </form>

        </div>



    </body>

    </html>
@endsection

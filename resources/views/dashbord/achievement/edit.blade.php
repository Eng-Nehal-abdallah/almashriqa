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
            <form method="POST" enctype="multipart/form-data" action="/updateachievement/{{ $achievement->id }}">
                @csrf
                @method('PUT')


                <img src="/{{ $achievement->image }}" width="100" height="100" alt="image">
                <div class="form-group">
                    <label for="title">image</label>

                    <h5>change</h5>
                    <input type="file" accept="image/*" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="title">name_ar</label>
                    <input type="text" class="form-control" id="name_ar" name="name_ar"
                        value="{{ $achievement->name_ar }}" />
                </div>
                <div class="form-group">
                    <label for="content">Name_en</label>
                    <input type="text" class="form-control" name="name_en" id="name_en"
                        value="{{ $achievement->name_en }}" />
                </div>
                <div class="form-group">
                    <label for="title">Details ar </label>
                    <input type="text" class="form-control" id="details_ar" name="details_ar"
                        value="{{ $achievement->details_ar }}" />
                </div>
                <div class="form-group">
                    <label for="title">Details en </label>
                    <input type="text" class="form-control" id="details_en" value="{{ $achievement->details_en }}"
                        name="details_en" />
                </div>
                <div class="form-group">
                    <label for="title"> Type </label>
                    <input type="text" class="form-control" id="type" value="{{ $achievement->type }}"
                        name="details_en" />
                </div>
                <div class="form-group col-md-6">
                    <label for="input">Type</label>
                    <select name="id_types" id="id_types" class="form-select">
                      <option value="">Select type</option>
                      @foreach ($types  as $type )
                      <option value="{{$type['id']}}">{{$type['name_ar']}}</option>
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

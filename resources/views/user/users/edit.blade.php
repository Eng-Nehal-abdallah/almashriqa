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
            <form method="POST" enctype="multipart/form-data" action="/updateuser/{{ $user->id }}">
                @csrf
                @method('PUT')

                <div class="form-group col-md-6">
                    <label for="name">الاسم</label>
                    <input type="text" class="form-control" name='name' id='name' value={{  $user->name }}>
                </div>
                <div class="form-group col-md-6">
                    <label for="name">الايميل</label>
                    <input type="email" class="form-control" name='email' id='email' value={{  $user->email }}>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">رقم السري</label>
                        <input type="password" class="form-control" id='password' name='password' >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">رقم السري اعادة </label>
                        <input type="password" class="form-control" id='pass' name='pass'>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <select id="country" name="id_facutly" class="form-control">
                        <option value="">الكلية</option>
                        @foreach ($facutlies as $list)
                            <option value="{{ $list->id }}">{{ $list->name_ar }}</option>
                        @endforeach
                    </select>

                  <div class="form-group col-md-6">
                    <label for="input">صلاحية المسجل</label>
                    <select name="usertype" id="day" class="form-select">
                      <option value="">Select type</option>

                      <option value="admin">ادمن</option>
                      <option value="student">طالب</option>
                      <option value="doctor">كادر تدريسي</option>
                      <option value="facutly">كلية</option>

                    </select>
                  </div>
                <input type="submit" class="btn btn-primary" value="update" />
                <a href="/dashboard" class="btn bg-gray">cancel</a>
            </form>

        </div>



    </body>

    </html>
@endsection

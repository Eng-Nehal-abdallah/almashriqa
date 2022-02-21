<!doctype html>
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
        <form method="POST" action="/Facutly/{{ $Facutlies->id }}">

            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="title">Name_Ar</label>
                <input type="text" class="form-control" id="name_ar" name="name_ar"
                    value="{{ $Facutly->name }}" />
            </div>

            <div class="form-group">
                <label for="title">About_Facutly_Ar</label>
                <input type="text" class="form-control" id="about_facutly_ar" name="about_facutly_ar"
                    value="{{ $Facutly->about_facutly_ar }}" />
            </div>
            <div class="form-group">
                <label for="title">about_facutly_en</label>
                <input type="text" class="form-control" id="about_facutly_en"
                    value="{{ $Facutly->about_facutly_en }}" name="about_facutly_en" />
            </div>
            <div class="form-group">
                <label for="title">Message_Dean_Ar</label>
                <input type="text" class="form-control" id="message_dean_ar"
                    value="{{ $Facutly->message_dean_ar }}" name="message_dean_ar" />
            </div>
            <div class="form-group">
                <label for="title">Message_Dean_EN</label>
                <input type="text" class="form-control" id="message_dean_en"
                    value="{{ $Facutly->message_dean_en }}" name="message_dean_en" />
            </div>
            <div class="form-group">
                <label for="title">Message_Ar</label>
                <input type="text" class="form-control" id="message_dean_ar"
                    value="{{ $Facutly->message_dean_ar }}" name="message_ar" />
            </div>
            <div class="form-group">
                <label for="title">Message_EN</label>
                <input type="text" class="form-control" id="message_en" value="{{ $Facutly->message_en }}"
                    name="message_en" />
            </div>
            <div class="form-group">
                <label for="title">goal_ar</label>
                <input type="text" class="form-control" id="goal_ar" value="{{ $Facutly->goal_ar }}"
                    name="goal_ar" />
            </div>

            <div class="form-group">
                <label for="title">goal_en</label>
                <input type="text" class="form-control" id="goal_en" value="{{ $Facutly->goal_en }}"
                    name="goal_en" />
            </div>
            <div class="form-group">
                <label for="title">view_ar</label>
                <input type="text" class="form-control" id="view_ar" value="{{ $Facutly->view_ar }}"
                    name="view_ar" />
            </div>
            <div class="form-group">
                <label for="title">view_en</label>
                <input type="text" class="form-control" id="view_en" value="{{ $Facutly->view_en }}"
                    name="view_en" />
            </div>
            <div class="form-group">
                <label for="title">Image</label>
                <input type="file" accept="image/*" class="form-control" id="image" value="{{ $Facutly->image }}" name="image" />
            </div>
            <input type="submit" class="btn btn-primary" value="update" />
            <a href="/dashboard_Facutly" class="btn bg-gray">cancel</a>
        </form>
        <br>

        <form method="post" action="/Facutly/{{ $Facutly->id }}">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="delete" />


        </form>
    </div>



</body>

</html>

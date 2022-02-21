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
            <form method="POST" enctype="multipart/form-data" action="/updatefees/{{ $fees->id }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">table</label>
                    <textarea class="form-control is-invalid" id="validationTextarea" name="tablecode" required>{{ $fees->tablecode }} </textarea>


                </div>
                <div class="form-group">
                    <label for="title">جدول</label>
                    <textarea class="form-control is-invalid" id="validationTextarea" name="tablecode_ar" required>{{ $fees->tablecode_ar }} </textarea>


                </div>


        <input type="submit" class="btn btn-primary" value="update" />
                <a href="/dashboard" class="btn bg-gray">cancel</a>
            </form>

    </body>

    </html>
@endsection
<script src="./js/main.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#country').change(function() {
            let id_facutly = jQuery(this).val();

            jQuery('#city').html('<option value="">Select City</option>')
            jQuery.ajax({
                url: '/getState',
                type: 'post',
                data: 'id_facutly=' + id_facutly + '&_token={{ csrf_token() }}',
                success: function(result) {
                    jQuery('#state').html(result)
                }
            });
        });


    });
</script>

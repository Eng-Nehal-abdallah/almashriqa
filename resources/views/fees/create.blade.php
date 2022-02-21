@extends('layouts.app')



@section('content')

<div class="container">
    <img class="wave" src="./form img/wave.png" alt="">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 text-center ">create </h2>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Add</title>
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        </div>

        <div class="row justify-content-around">


    {{-- ////////////////// --}}
    <form action="{{ route('feescreste') }}"  enctype="multipart/form-data"  method="POST" >
        @csrf


          <div class="form-group col-md-6">
            <label for="inputEmail4">table</label>
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea"  name="tablecode" required></textarea>

          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">جدول</label>
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea"  name="tablecode_ar" required></textarea>

          </div>

    <button type="submit" class="btn btn-primary">Sign Up</button>
   </form>
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
    @endsection

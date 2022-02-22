@extends('layouts.app')



@section('content')

<div class="container">
    <img class="wave" src="./form img/wave.png" alt="">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 text-center ">create type achievement</h2>

        </div>

        <div class="row justify-content-around">


    {{-- ////////////////// --}}
    <form action="/create_instype" method="POST" >
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">name_ar</label>
            <input type="text" class="form-control" name='name_ar' id='name_ar' >
          </div>
          <div class="form-group col-md-6">
            <label for="input">name_en</label>
            <input type="text" class="form-control" id='name_en' name='name_en'>
          </div>
        </div>
        <div class="form-group col-md-6">
            <select name="id_type" id="id_facutly" class="form-select">
              <option value="">Select type</option>
              @foreach ($types  as $type )
              <option value="{{$type['id']}}">{{$type['name_ar']}}</option>
              @endforeach
            </select>
          </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>

        </div>

    <script src="./js/main.js"></script>

    @endsection

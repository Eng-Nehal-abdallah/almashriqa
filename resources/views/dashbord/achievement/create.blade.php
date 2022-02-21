@extends('layouts.app')



@section('content')

<div class="container">
    <img class="wave" src="./form img/wave.png" alt="">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 text-center ">create rewards</h2>

        </div>

        <div class="row justify-content-around">


    {{-- ////////////////// --}}
    <form action="{{ route('achievements') }}"  enctype="multipart/form-data"  method="POST" >
        @csrf

        <div class="form-row">
            <input type="text" hidden class="form-control" name='id_doctor' id='id_doctor' value=" {{ $doctor->id  }}">
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
            <label for="input">Details_Ar</label>
            <input type="text" class="form-control" id='details_ar' name='details_ar'>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label for="input">Details_EN</label>
            <input type="text" class="form-control" id='details_en' name='details_en'>
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

          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image">Image</label>
                <input type="file" accept="image/*" class="form-control" id='image' name='image'>
            </div>
        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="pdf">pdf</label>
                <input type="file" accept=".pdf*" class="form-control" id='pdf' name='pdf'>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>

        </div>

    <script src="./js/main.js"></script>

    @endsection

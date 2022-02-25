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
    <form action="create_department"  enctype="multipart/form-data"  method="POST" >
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
            <label for="input">Details_Ar</label>
            <input type="text" class="form-control" id='details_ar' name='details_ar'>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label for="input">Details_EN</label>
            <input type="text" class="form-control" id='details_en' name='details_en'>
          </div>
        </div>
        <div class="form-group">
            <label for="link">color</label>
            <input type="color"  name='color'  id='color'>
        </div>
        <div class="form-group col-md-6">
            <label for="link">faculty</label>
            <select name="id_facutly" id="id_facutly" class="form-select">
              <option value="">Select University</option>
              @foreach ($facutlies  as $fac )
              <option value="{{$fac['id']}}">{{$fac['name_ar']}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image">Image</label>
                <input type="file" accept="image/*" class="form-control" id='image' name='image'>
            </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>

        </div>

    <script src="./js/main.js"></script>

    @endsection

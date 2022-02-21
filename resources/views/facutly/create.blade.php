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
    <form action="/university" method="POST" >
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="name">name</label>
            <input type="text" class="form-control" name='name' id='name' >
          </div>
          <div class="form-group col-md-6">
            <label for="details">About_Ar</label>
            <input type="text" class="form-control" id='about_facutly_ar' name='about_facutly_ar'>
          </div>
        </div>
        <div class="form-group col-md-6">
            <label for="details">About_En</label>
            <input type="text" class="form-control" id='about_facutly_en' name='about_facutly_en'>
          </div>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" accept="image/*" class="form-control" name='image'  id='image'>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="message_ar">message_ar</label>
            <input type="text" class="form-control"  id='message_ar' name='message_ar' >
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">message_en</label>
              <input type="text" class="form-control"  id='message_en' name='message_en' >
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">view_ar</label>
              <input type="text" class="form-control"  id='view_ar' name='view_ar' >
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">view_en</label>
              <input type="text" class="form-control"  id='view_en' name='view_en' >
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">goal_ar</label>
              <input type="text" class="form-control"  id='goal_ar' name='goal_ar' >
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">goal_en</label>
              <input type="text" class="form-control"  id='goal_en' name='goal_en' >
            </div>

        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">message_dean_ar</label>
              <input type="color" class="form-control"  id='color' name='color' >
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputAddress">color</label>
              <input type="text" class="form-control"  id='message_dean_ar' name='message_dean_ar' >
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

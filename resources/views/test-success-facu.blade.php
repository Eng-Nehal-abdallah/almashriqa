@extends('layouts.app')


@section('content')
    @extends('layouts.head-ar')
    <center>
        <div class="container">
            <h3> {{ Auth::user()->name }}</h3>

            <div style="background-color: #ebf8e1 ; color:black; font-size:50px " class="container">
                <a href="/dashboard20/{{ Auth::user()->id_facutly }}">الاوائل الكلية </a>
            </div>
            <div style="background-color: #ebf8e1 ; color:black; font-size:50px " class="container">
                <a href="/dashboard4/{{ Auth::user()->id_facutly }}"> الكادر التدريسي </a>
            </div>
            <div style="background-color: #ebf8e1 ; color:black; font-size:50px " class="container">
                <a href="/dashboard9/{{ Auth::user()->id_facutly }}"> جدول امتحان العملي </a>
            </div>
            <div style="background-color: #ebf8e1 ; color:black; font-size:50px " class="container">
                <a href="/dashboard8/{{ Auth::user()->id_facutly }}"> جدول امتحان النهائي </a>
            </div>
            <div style="background-color: #ebf8e1 ; color:black; font-size:50px " class="container">
                <a href="/dashboard10/{{ Auth::user()->id_facutly }}"> جدول المحاضرات </a>

            </div>
    </center>
@endsection

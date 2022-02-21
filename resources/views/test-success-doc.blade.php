@extends('layouts.app')


@section('content')


@extends('layouts.head-ar')




    <div class="container">
        <h3> {{ Auth::user()->name }}</h3>


    <a href="/docs/{{ Auth::user()->id_doctor }}/edit">
        <img width="600" height="600" src="/images/prof2.jpg" />
    </a>
    <td><a class="btn shadow-sm btn-dark" href="/doctorsocial/{{ Auth::user()->id_doctor }}/add">Add social media</a></td>
    <td><a class="btn shadow-sm btn-dark" href="/social/{{ Auth::user()->id_doctor }}/show">show social media</a></td>
    <td><a class="btn shadow-sm btn-dark" href="/achievement/{{ Auth::user()->id_doctor }}/show">show achievement</a></td>
    <td><a class="btn shadow-sm btn-dark" href="/dashboard19/{{ Auth::user()->id_doctor }}">show Lectures</a></td>
    </div>
@endsection

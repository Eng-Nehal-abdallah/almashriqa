@extends('layouts.app')


@section('content')


@extends('layouts.head-ar')

    <div class="container">
        <h3> {{ Auth::user()->name }}</h3>


<a href="/Facutlyp/{{ Auth::user()->id_facutly }}/show"><img src="/images/student.jpg" /></a>
</div>
@endsection

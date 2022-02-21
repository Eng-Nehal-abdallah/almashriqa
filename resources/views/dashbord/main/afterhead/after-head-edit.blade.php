@extends('layouts.app')


@section('content')


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
        <form method="POST" action="/mash/{{ $mash->id }}">

            @method('PUT')
            @csrf

            <div class="form-group">
                <label for="title">abstract_title_ar</label>
                <input type="text" class="form-control" id="abstract_title_ar" name="abstract_title_ar" value="{{  $mash->abstract_title_ar}}" />
            </div>
            <div class="form-group">
                <label for="content">abstract_small_ar</label>
                <input type="text" class="form-control" name="abstract_title_en" id="abstract_title_en" value="{{ $mash->abstract_title_en  }}" />
            </div>
            <div class="form-group">
                <label for="title">abstract_small_ar </label>
                <input type="text" class="form-control" id="abstract_small_ar" name="abstract_small_ar" value="{{  $mash->abstract_small_ar  }}" />
            </div>
            <div class="form-group">
                <label for="title">abstract_small_en </label>
                <input type="text" class="form-control" id="abstract_small_en" value="{{  $mash->abstract_small_en}}" name="abstract_small_en" />
            </div>

            <div class="form-group">
                <label for="title">abstract_details_ar </label>
                <input type="text" class="form-control" id="abstract_details_ar" name="abstract_details_ar" value="{{  $mash->abstract_details_ar  }}" />
            </div>
            <div class="form-group">
                <label for="title">abstract_details_en	 </label>
                <input type="text" class="form-control" id="abstract_details_en	" value="{{  $mash->abstract_details_en	}}" name="abstract_details_en" />
            </div>


            <div class="form-group">
                <label for="title">استراتيجيه</label>
                <input type="text" class="form-control" id="strategy_ar" name="strategy_ar" value="{{  $mash->strategy_ar}}" />
            </div>
            <div class="form-group">
                <label for="content">strategy</label>
                <input type="text" class="form-control" name="strategy_en" id="strategy_en" value="{{ $mash->strategy_en  }}" />
            </div>
            <div class="form-group">
                <label for="title">جدول الرسوم بالعربي </label>
                <input type="text" class="form-control" id="fees_ar" name="fees_ar" value="{{  $mash->fees_ar  }}" />
            </div>
            <div class="form-group">
                <label for="title"> جدول  الرسوم بالانجليزي </label>
                <input type="text" class="form-control" id="fees_en" value="{{  $mash->fees_en}}" name="fees_en" />
            </div>

            <div class="form-group">
                <label for="title">كلمه رئيس الجامعة  بالعربي  </label>
                <input type="text" class="form-control" id="word_ar" name="word_ar" value="{{  $mash->word_ar  }}" />
            </div>
            <div class="form-group">
                <label for="title">	 كلمة رئيس الحامعه بالانجليزي</label>
                <input type="text" class="form-control" id="word_En	" value="{{  $mash->word_En	}}" name="word_En" />
            </div>

            <div class="form-group">
                <label for="title">عدد الظلاب بالجامعه       </label>
                <input type="text" class="form-control" id="students" name="students" value="{{  $mash->studentds  }}" />
            </div>
            <div class="form-group">
                <label for="title">	 عدد القاعات التدريسيه</label>
                <input type="text" class="form-control" id="room" value="{{  $mash->room	}}" name="room" />
            </div>
            <div class="form-group">
                <label for="title">صورة العميد</label>

                <h5>change</h5>
                <input type="file" accept="image/*" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">ملف الاستراتيجيه </label>

                <h5>change</h5>
                <input type="file" accept=".bmp,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip"id="pdf" name="pdf">
            </div>

            <input type="submit" class="btn btn-primary" value="update"/>
            <a href="/dashboard" class="btn bg-gray">cancel</a>
        </form>
        <br>

            <form method="post" action="/mash/{{$mash->id }}">
                @csrf
                @method('DELETE')
                <input type="submit" class="btn btn-danger" value="delete"/>


        </form>
    </div>



</body>
</html>
@endsection

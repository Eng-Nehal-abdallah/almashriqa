<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @extends('layouts.head-ar')
    <link rel="stylesheet" href="/scss/agreement-inner.css">



    <!-- start wol js -->

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.css" />
    <title>Document</title>
</head>


<body class="text-right" dir="rtl">



    <!-- start section 2 -->

    <section class="section-2 ">
        <div class="container-fluid">
            <div class="row justify-content-around">

                <div class="col-md-5 col-sm-10">
                    <img src="/{{$agreement->image}}" alt="">
                </div>

                <div class="col-md-5 col-sm-10">
                    <div class="caption">
                        <small>جامعة </small>
                        <h2>{{ $agreement->name_en }}</h2>
                        <p>{{ $agreement->details_en }}</p>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End section 1 -->
    <!-- End section 1 -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->
    <!-- starting section 1 -->

    <!-- end section 1 -->

    <!--start footer -->

    @extends('layouts.footer-en')


    <!-- start jquery -->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>

    <script src="/js/main.js"></script>
    <script src="/js/dark.js"></script>
    <script src="/js/lang.js"></script>
    <script src="/js/nav.js"></script>



    <script>
        var bool = true;

        $(document).ready(function() {
            $('#lang').on('click', function() {

                if (bool == true) {
                    $("body").removeAttr("dir", "ltr");
                    $("body").attr("dir", "rtl");

                    $('p').removeClass('text-left')
                    $('p').addClass('text-right')

                    bool = false;
                } else if (bool == false) {

                    $("body").removeAttr("dir");
                    $("body").attr("dir", "ltr");

                    $('p').removeClass('text-right')
                    $('p').addClass('text-left')


                    bool = true;
                }

            })
        })
    </script>

</body>

</html>

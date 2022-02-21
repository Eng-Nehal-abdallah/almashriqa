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
                    <img src="{{ asset('imgs/header.png') }}" alt="">
                </div>

                <div class="col-md-5 col-sm-10">
                    <div class="caption">
                        <small>جامعة </small>
                        <h2>jkhgfdghjkjhgfdsfdghj</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero placeat similique maiores consequatur velit reprehenderit, nobis aliquid, quia exercitationem sequi molestiae unde numquam nam, amet laudantium accusamus eaque voluptatibus sapiente?</p>


                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- End section 2 -->


    <!-- start light & dark -->
    <div class="dark-mood ">
        <i class="fas moon"></i>
    </div>
    <!-- start light & dark -->
    <!-- starting section 1 -->

    <!-- end section 1 -->

    <!--start footer -->

    @extends('layouts.footer-ar')
    <!-- start jquery -->
    <script src="/js/jquery-3.6.0.min.js"></script>

    <!-- start owl carousel -->

    <!-- start bootstrap -->
    <script src="/js/jquery.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>


    <!-- start section -->
    <script src="/js/main.js"></script>
    <script src="/js/dark.js"></script>
    <script src="/js/nav.js"></script>
    {{--  <script src="/js/dark.js"></script>  --}}

    <script>
        var bool = true;

        $(document).ready(function() {
            $('#lang').on('click', function() {

                if (bool == true) {
                    $("header").removeAttr("dir", "ltr");
                    $("header").attr("dir", "rtl");

                    $('.section-1').removeClass('text-left')
                    $('.section-1').addClass('text-right')

                    $('.section-2').removeClass('text-left')
                    $('.section-2').addClass('text-right')
                    bool = false;
                } else if (bool == false) {
                    $("header").removeAttr("dir");
                    $("header").attr("dir", "ltr");

                    $('.section-1').removeClass('text-right')
                    $('.section-1').addClass('text-left')
                    $('.section-2').removeClass('text-right')
                    $('.section-2').addClass('text-left')
                    bool = true;
                }

            })
        })

        $(document).ready(function() {
            var dark = document.querySelector('.dark-mood > .fas');

            var x = 0;
            dark.on('click' , function(){
                if(x == 0){
                    $('body').addClass('dark');

                }
            })



        })

    </script>

</body>

</html>

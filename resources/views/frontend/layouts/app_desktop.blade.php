<!DOCTYPE html>
<html lang="en">
<head>
    <title>MMGS ARCHITECTS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous"/>
    <!-- Theame Style    -->
    <link rel="stylesheet" href="{{url('desktop_res/styles/css/style.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">--}}
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>



    <link rel="stylesheet" href="{{url('css/kwheeler.css')}}" />

    <style>
        body {
            background-color: #ffffff;
            margin: 0px;
            height: 100%;
            overflow: hidden;
        }
        #lottie {
            background-color: #ffffff;
            width: 100%;
            height: 100%;
            display: block;
            overflow: hidden;
            transform: translate3d(0, 0, 0);
            text-align: center;
            opacity: 1;
        }
    </style>
    <style>
        @font-face {
            font-family: "Candara";
            /* src: url('{{ public_path('assets/font/Candara.ttf') }}') format("truetype"); */
            src: url("{{url('img/assets/font/Candara.ttf')}}") format("truetype");
            /* Safari, Android, iOS */
        }
    </style>
</head>

<div id="preloader" style="width: 100%;height: 100%;position: fixed;background: #fbfbfb;z-index: 9999999;">
    <img id="preimage" src="{{url('assets/Comp 1_4.gif')}}" style="width: 100%;position: absolute;padding-top: 30vh;">
</div>

<body>


@yield('content')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>


<script    type="text/javascript">
    $('#preimage').hide(); // will first fade out the loading animation
    $('#preloader').delay(50); // will fade out the white DIV that covers the website.
    $('#preloader').hide(); // will fade out the white DIV that covers the website.
    $('body').delay(50).css({'overflow':'visible'});
</script>

<script>
    var swiper = new Swiper(".swiper-container3", {
        navigation: {
            nextEl: ".swiper-button-next3",
            prevEl: ".swiper-button-prev3",
        },
    });
</script>

<script>
    var swiper = new Swiper(".swiper-container2", {
        navigation: {
            nextEl: "#swiper-button-next2",
            prevEl: "#swiper-button-prev2",
        },
    });
</script>

<script>
    var swiper = new Swiper(".swiper-container1", {
        slidesPerView: 1.5,
        spaceBetween: 10,
        centeredSlides: true,
        freeMode: true,
        grabCursor: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>


<script>
    var swiper = new Swiper('.swiper-container4', {
        direction: 'vertical',
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        mousewheel: true,
    });
</script>



<script>
    var swiper = new Swiper(".swiper-container5", {
        navigation: {
            nextEl: ".swiper-button-next3",
            prevEl: ".swiper-button-prev3",
        },
    });
</script>


<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>

<script>
    $(document).ready(function() {
        $('.your-class').slick();
    });

    $('.modal').on('shown.bs.modal', function(e) {
        $('.your-class').slick('setPosition');
        $('.wrap-modal-slider').addClass('open');
    })
</script>

<script>
    function hidenav() {
        var text = document.getElementById("home-page-text");
        if ($(".navbar-toggler").attr("aria-expanded") === "true") {
            text.style.display = "block";
        } else {
            text.style.display = "none";
        }
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>MMGS Architects - Godridge Samuel</title>
    <!-- Required meta tags -->
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" type="image/png" href="{{asset('img/assets/mmgs sm fav.png')}}" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Link Swiper's CSS -->
    <!-- <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet"> -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>
    <!-- <link rel='stylesheet' href='https://kenwheeler.github.io/slick/slick/slick-theme.css'> -->
    <!-- Theame Style    -->
    <link rel="stylesheet" href="{{url('css/style.css')}}" />
    <link rel="stylesheet" href="{{url('css/kwheeler.css')}}" />
    <style>
        @font-face {
            font-family: "Candara";
            /* src: url('{{ public_path('/assets/font/Candara.ttf') }}') format("truetype"); */
            src: url("{{url('img/assets/font/Candara.ttf')}}") format("truetype");
            /* Safari, Android, iOS */
        }
    </style>

</head>


<div id="preloader" style="width: 100%;height: 100%;position: fixed;background: #fbfbfb;z-index: 9999999;">
    <img id="preimage" src="{{url('assets/Comp 1_4.gif')}}" style="width: 100%;position: absolute;padding-top: 40vh;object-fit: contain;height: 56vh;">
</div>

    <body id="boyd_elem" style="overflow: hidden;">
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function hidenav() {
            // alert("sdsdf");
            var text = document.getElementById("home-page-text");
            if ($('.navbar-toggler').attr('aria-expanded') === "true") {

                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'></script>

    <script type="text/javascript">
        setTimeout(preloaderfunc, 3000);

        function preloaderfunc() {
            $('#preimage').hide(); // will first fade out the loading animation
            $('#preloader').delay(50); // will fade out the white DIV that covers the website.
            $('#preloader').hide(); // will fade out the white DIV that covers the website.
        }

    </script>

    <script>
        var swiper = new Swiper(".swiper-container3", {
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next3",
                prevEl: ".swiper-button-prev3",
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
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                500: {
                    slidesPerView: 1,
                },
                700: {
                    slidesPerView: 1.5,
                },
            },
        });
    </script>

    <script>
        $("#myBtn").click(function() {
            $("#short-text").addClass("d-none");
            $("#dots").addClass("d-none");
            $("#myBtn").addClass("d-none");
            $("#long-text").removeClass("d-none");
            $("#myBtnLess").removeClass("d-none");
        });
        $("#myBtnLess").click(function() {
            $("#short-text").removeClass("d-none");
            $("#dots").removeClass("d-none");
            $("#myBtn").removeClass("d-none");
            $("#long-text").addClass("d-none");
            $("#myBtnLess").addClass("d-none");
        });
        // function myFunction() {
        //     var dots = document.getElementById("dots");
        //     var moreText = document.getElementById("more");
        //     var btnText = document.getElementById("myBtn");
        //     var btnTextLess = document.getElementById("myBtnLess");
        //     var shorttext = document.getElementById("short-text");
        //     var longtext = document.getElementById("long-text");

        //     if(btnText.click()){
        //         shorttext.style.display="none";
        //     }
        //     if (dots.style.display === "none") {
        //         btnText.style.display = "none";
        //         shorttext.style.display = "none";
        //         longtext
        //         dots.style.display = "inline";
        //         btnText.innerHTML = "Read more";
        //         moreText.style.display = "none";
        //     } else {
        //         dots.style.display = "none";
        //         btnText.innerHTML = "Read less";
        //         moreText.style.display = "inline";
        //     }
        // }
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
            slidesPerView: 1,
            spaceBetween: 8,
            navigation: {
                nextEl: ".swiper-button-next3",
                prevEl: ".swiper-button-prev3",
            },
        });
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


    @stack('after=scripte')





    </body>



</html>
<?php

    // Configuracion general
    $title = "College | Mundial de Hinchadas";
    $description = "";

    // headers
    require_once 'php/includes/headers.php';

?>
<body>


    <?php

        include "tpl/header.php";
        include "tpl/mobile_menu.php";
        include "tpl/home.php";
        include "tpl/mundial-de-hinchadas.php";
        include "tpl/participar.php";
        include "tpl/testimonios.php";
        include "tpl/quienes-somos.php";        
        include "php/includes/footer-includes.php";

    ?>

    <script type="text/javascript">

        // Selectors
        var video = $(".home-video video");

        // Action Events

        $(document).ready(function() {

            video.get(0).play();

            // Video Mute
            $(".sound-bt").click(function(){

                $(".sound-bt").toggleClass('active');

                if(video.prop('muted')) {
                    video.prop('muted',false);
                } else {
                    video.prop('muted',true);
                } // endif

            });

        +
            // Mobile Menu
            $('.mobile-menu-bt, .close-mobile-bt').click(function(){
                $(".mobile-menu-wrap").toggleClass('active');
            });

            $(".mobile-menu-nav").click(function(){
                $(".mobile-menu-wrap").removeClass('active');
            });

        });

        // Smooth scrolling on anchors

        $(document).on('click', 'a[href^="#"]', function (event) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - 39
            }, 500);
        });


        // Scroll Events

        $(window).scroll(function(){

            var scrollHeight = $(window).scrollTop();

            if(scrollHeight>300) {
                $("#header").addClass("sticky");
                video.get(0).pause();
            } else {
                $("#header").removeClass('sticky');
                video.get(0).play();
            } // endif
        });



        //Start of Tawk.to Script
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f0dfb965b59f94722bab8c9/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        //End of Tawk.to Script
    </script>
</body>
</html>

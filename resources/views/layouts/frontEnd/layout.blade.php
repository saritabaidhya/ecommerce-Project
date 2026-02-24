<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@if (isset($seoKeywords)) {{ $seoKeywords }}@else{{ $settings->first()->meta_keyword }} @endif">
    <meta name="description" content="@if (isset($seoDescriptions)) {{ $seoDescriptions }}@else{{ $settings->first()->meta_description }} @endif ">
    <meta name="{{$settings->first()->name}} " content="{{$settings->first()->name}}">
    <link rel="icon" type="image/png" href="{{ asset('frontEnd/fav/favicon.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('frontEnd/fav/favicon.svg') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontEnd/fav/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('frontEnd/fav/site.webmanifest') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/font-electro.css') }}">

    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/hs-megamenu/src/hs.megamenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/fancybox/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">

    <!-- CSS  -->
    <link rel="stylesheet" href="{{ asset('frontEnd/css/theme.css') }}">       
    <link rel="stylesheet" href="{{ asset('frontEnd/css/custom.css') }}">       
    
    <!-- Title -->
    <title>@if (isset($title)) {{ $title }}@else{{ $settings->first()->title }} @endif</title>
    <!-- Favicon -->
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon"> 
    <?php header('X-Frame-Options: DENY'); ?>



  </head>
  <body > 
    
    @yield('content')
      
    <!-- JS Global Compulsory -->
    <script src="{{ asset('frontEnd/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/bootstrap/bootstrap.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('frontEnd/vendor/appear.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/typed.js') }}) }}"></script>
    <script src="{{ asset('frontEnd/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/appear.js') }}"></script>
    <script src="{{ asset('frontEnd/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <!-- JS Electro -->
    <script src="{{ asset('frontEnd/js/hs.core.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.countdown.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.hamburgers.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.unfold.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.focus-state.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.malihu-scrollbar.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.validation.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.fancybox.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.onscroll-animation.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.slick-carousel.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.show-animation.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.svg-injector.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.scroll-nav.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.go-to.js') }}"></script>
    <script src="{{ asset('frontEnd/js/components/hs.selectpicker.js') }}"></script>
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'))
        toastElList.forEach(function (toastEl) {
            new bootstrap.Toast(toastEl, { delay: 5000 }).show();
        });
    });
</script>


    <!-- JS Plugins Init. -->
<script>
        $(window).on('load', function () {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                direction: 'horizontal',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });

            // initialization of svg injector module
            $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
        });

        $(document).on('ready', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of animation
            $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function () {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of popups
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of countdowns
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                monthsElSelector: '.js-cd-months',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate', {
                rules: {
                    confirmPassword: {
                        equalTo: '#signupPassword'
                    }
                }
            });

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');

            // initialization of hamburgers
            $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                beforeClose: function () {
                    $('#hamburgerTrigger').removeClass('is-active');
                },
                afterClose: function() {
                    $('#headerSidebarList .collapse.show').collapse('hide');
                }
            });

            $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                e.preventDefault();

                var target = $(this).data('target');

                if($(this).attr('aria-expanded') === "true") {
                    $(target).collapse('hide');
                } else {
                    $(target).collapse('show');
                }
            });

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');
        });
    </script>
  </body>
</html>
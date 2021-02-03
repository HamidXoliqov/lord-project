<?php
use Illuminate\Support\Facades\View;

// dd(Menu::menus());
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property=”og:image” content="http://okschain.nfi/{{asset('themes/frontend/img/favicon.png')}}" />
    <meta name="keywords" content="GM Uzbekistan">
    <meta name="description" content=" Okschain news">
    <meta name="Author" content="GM Uzbekistan">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('themes/frontend/img/favicon.png')}}">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="{{asset('themes/frontend/css/mobile-menu.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('themes/frontend/fonts/flaticon/flaticon.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('themes/frontend/css/style.css')}}">
</head>

<body>
    <div id="main-wrapper">
        <!-- Page Preloader -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>

        <div class="uc-mobile-menu-pusher">
            <div class="content-wrapper">
                <?php echo View::make('blocks.frontend-header') ?>                

                @yield('content')

                <?php echo View::make('blocks.frontend-footer') ?>                

            </div>
            <!-- .content-wrapper -->
        </div>
        <?php echo View::make('blocks.frontend-header-mob') ?> 
    </div>
    <!-- #main-wrapper -->

    <script src="{{ asset('themes/frontend/js/jquery-2.1.4.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{ asset('themes/frontend/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('themes/frontend/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('themes/frontend/js/scripts.js') }}"></script>
    <script>
        window.replainSettings = { id: 'c2265e7d-678c-4098-a6c5-e1f620ee4c3b' };
        (function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;
        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);
        })('https://widget.replain.cc/dist/client.js');
    </script>
</body>

</html>
<?php
use Illuminate\Support\Facades\View;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property=”og:image” content="http://okschain.info/{{asset('themes/frontend/img/favicon.png')}}" />
    <meta name="keywords" content="GM Uzbekistan">
    <meta name="description" content=" Okschain news">
    <meta name="Author" content="GM Uzbekistan">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('themes/backend/image/favicon.ico')}}">

    <link rel="stylesheet" href="{{ asset('themes/backend/css/bootstrap4-toggle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/backend/css/styles.css') }}">

    <script src="{{ asset('themes/backend/js/all.min.js') }}">
    </script>
    <style>
      .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
      .toggle.ios .toggle-handle { border-radius: 20rem; }
      .toggle.ios{width: 64.0781px!important;}
      /*.btn{display: inline-flex!important}*/
    </style>

</head>

    <body class="sb-nav-fixed">
        <?php echo View::make('blocks.backend-header') ?>        
            <div id="layoutSidenav">
                <?php echo View::make('blocks.backend-sidebar') ?>                
                <div id="layoutSidenav_content">
                    @yield('content')
                    <?php echo View::make('blocks.backend-footer') ?>
                </div>
            </div>
        
        <!-- jQuery -->
        <script src="{{ asset('themes/backend/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('themes/backend/js/bootstrap-4.3.1.min.js') }}"></script>
        <script src="{{ asset('themes/backend/js/scripts.js') }}"></script>
        @stack('scripts')
    </body>
</html>
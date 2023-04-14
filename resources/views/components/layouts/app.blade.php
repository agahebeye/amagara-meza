<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="/app/plugins/images/favicon.png">
    <title>{{config('app.name')}} - {{$title ?? 'Dashboard'}}</title>

    <link href="/app/css/bootstrap.min.css" rel="stylesheet">
    <link href="/app/css/bootstrap-extension.css" rel="stylesheet">
    <link href="/app/css/sidebar-nav.min.css" rel="stylesheet">

    {{ $moreStyles ?? '' }}

    <link href="/app/css/style.css" rel="stylesheet">
    <link href="/app/css/megna-dark.css" id="theme" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>

    <div id="wrapper">

        <x-navbar />
        <x-sidebar />

        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="bg-title">
                    <!-- <div class="col-lg-3 col-md-4 col-sm-12 col-12"> -->
                    <h4 class="page-title">{{ $title ?? 'Dashboard' }}</h4>
                    <!-- </div> -->

                    <!-- <div class="col-lg-9 col-sm-12 col-md-8 col-12"> -->
                    <ol class="breadcrumb">
                        <li><a href="#">Hospital</a></li>
                        <li class="active">{{ $title ?? 'Dashboard'}}</li>
                    </ol>
                </div>
            </div>


            <div class="row px-5">
                <div class="col-sm-12">
                    <div class="bg-white p-4 rounded-md">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

        <footer id="footer" class="text-center"> &copy; 2023 Crafted by Bymas Empire</footer>
    </div>
    </div>
    <script src="/app/js/jquery.min.js"></script>
    <script src="/app/js/tether.min.js"></script>
    <script src="/app/js/bootstrap.min.js"></script>
    <script src="/app/js/bootstrap-extension.min.js"></script>
    <script src="/app/js/sidebar-nav.min.js"></script>
    <script src="/app/js/jquery.slimscroll.js"></script>

    {{ $moreScripts ?? '' }}

    <script src="/app/js/custom.min.js"></script>

</body>

</html>
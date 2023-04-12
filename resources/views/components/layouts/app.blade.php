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

    <!-- Bootstrap Core CSS -->
    <link href="/app/css/bootstrap.min.css" rel="stylesheet">
    <link href="/app/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/app/css/sidebar-nav.min.css" rel="stylesheet"> <!-- animation CSS -->

    {{ $moreStyles ?? '' }}
    <!-- Custom CSS -->
    <link href="/app/css/style.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="/app/css/megna-dark.css" id="theme" rel="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <x-navbar />

        <x-sidebar />

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">{{ $title ?? 'Dashboard' }}</h4>
                    </div>

                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Hospital</a></li>
                            <li class="active">{{ $title ?? 'Dashboard'}}</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                {{ $slot }}


            </div>
            <!-- /.container-fluid -->
            <footer id="footer" class="text-center"> &copy; 2023 Crafted by Bymas Empire</footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="/app/js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/app/js/tether.min.js"></script>
    <script src="/app/js/bootstrap.min.js"></script>
    <script src="/app/js/bootstrap-extension.min.js"></script>
    <!-- Menu /app/Plugin JavaScript -->
    <script src="/app/js/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="/app/js/jquery.slimscroll.js"></script>
    {{ $moreScripts ?? '' }}
    <script src="/app/js/custom.min.js"></script>

    <!-- Custom Theme JavaScript -->


</body>

</html>
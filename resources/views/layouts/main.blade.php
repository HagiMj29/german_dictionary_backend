<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Backend German Dictionary</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
    <link href="{{ asset('css/startmin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>

    <div id="wrapper">
        @include('layouts.navbar')
        @include('layouts.sidebar')
        <div id="page-wrapper">
            <div class="container-fluid">
            @yield('container')
            </div>
        </div>
    </div>
         <!-- jQuery -->
         <script src="../js/jquery.min.js"></script>

         <!-- Bootstrap Core JavaScript -->
         <script src="../js/bootstrap.min.js"></script>
 
         <!-- Metis Menu Plugin JavaScript -->
         <script src="../js/metisMenu.min.js"></script>
 
         <!-- Morris Charts JavaScript -->
         <script src="../js/raphael.min.js"></script>
         <script src="../js/morris.min.js"></script>
         <script src="../js/morris-data.js"></script>
 
         <!-- Custom Theme JavaScript -->
         <script src="../js/startmin.js"></script>
</body>
</html>
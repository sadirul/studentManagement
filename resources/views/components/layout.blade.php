<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>{{ $title }}</title>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body>


{{ $content }}


  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	
  <!-- simplebar js -->
  <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- waves effect js -->
  <script src="{{ asset('assets/js/waves.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
  <!-- Custom scripts -->
  <script src="{{ asset('assets/js/app-script.js') }}"></script>
  <!-- Chart js -->
  <script src="{{ asset('assets/plugins/Chart.js/Chart.min.js') }}"></script>
  <!--Peity Chart -->
  <script src="{{ asset('assets/plugins/peity/jquery.peity.min.js') }}"></script>
  <!-- Index js -->
  <script src="{{ asset('assets/js/index.js') }}"></script>
  <script src="{{ asset('assets/js/myscript.js') }}"></script>

</body>
</html>

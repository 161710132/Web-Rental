<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Member </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset ('/assests/adminn/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('/assests/adminn/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ asset ('/assests/adminn/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset ('/assests/adminn/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset ('/assests/adminn/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('member.navbar')

    <!-- partial -->
    @include('member.partials')
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset ('/assests/adminn/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset ('/assests/adminn/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset ('/assests/adminn/js/off-canvas.js')}}"></script>
  <script src="{{ asset ('/assests/adminn/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset ('/assests/adminn/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
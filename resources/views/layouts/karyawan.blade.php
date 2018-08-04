<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Purple Karyawan</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset ('/assests/karyawan/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('/assests/karyawan/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset ('/assests/karyawan/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset ('/assests/karyawan/images/favicon.png')}}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('karyawan.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_sidebar.html -->
      @include('karyawan.sidebar')  
      <!-- partial dashboard -->
      @yield('content')
      <!-- end dashboard -->
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset ('/assests/karyawan/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset ('/assests/karyawan/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset ('/assests/karyawan/js/off-canvas.js')}}"></script>
  <script src="{{ asset ('/assests/karyawan/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset ('/assests/karyawan/js/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

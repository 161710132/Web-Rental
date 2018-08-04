<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset ('/assests/adminn/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset ('/assests/adminn/vendors/iconfonts/puse-icons-feather/feather.css')}}">
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
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
          <div class="auto-form-wrapper">
          <div class="form-group">
                <label class="label">Login</label>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <td>
                            <a class="btn btn-danger" href="{{ route('register')}}">Register</a>
                                </td>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset ('/assests/adminn/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{ asset ('/assests/adminn/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ asset ('/assests/adminn/js/off-canvas.js')}}"></script>
  <script src="{{ asset ('/assests/adminn/js/hoverable-collapse.js')}}"></script>
  <script src="{{ asset ('/assests/adminn/js/misc.js')}}"></script>
  <script src="{{ asset ('/assests/adminn/js/settings.js')}}"></script>
  <script src="{{ asset ('/assests/adminn/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>

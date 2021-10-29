<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('backend')}}/plugins/fontawesome/fontawesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('backend')}}/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="{{url('backend')}}/css/custom.css">
    @yield('css')
</head>
<body class="hold-transition login-page">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <div class="login-box">
        <div class="login-logo">
          <a href="../../index2.html"><b>Login</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
          <div class="card-body login-card-body">
            {{-- <p class="login-box-msg">Sign in to start your session</p> --}}

            <form action="{{route('auth.login')}}" method="post">
                @csrf
              <div class="input-group mb-3">
                <input name="email" type="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input name="password" type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center">

                <!-- /.col -->

                  <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                <!-- /.col -->
              </div>
            </form>


            <!-- /.social-auth-links -->

          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('backend')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('backend')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('backend')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('backend')}}/dist/js/demo.js"></script>
@yield('js')

</body>
</html>

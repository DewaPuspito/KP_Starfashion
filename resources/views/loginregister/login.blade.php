<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StarFashion Maintenance</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
  <style>
    .password-toggle-btn {
      cursor: pointer;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Login</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Log in to start your session</p>

      <form action="/postlogin" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          <div class="input-group-append"> 
            <div class="input-group-text password-toggle-btn">
              <span class="fas fa-eye"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a href="/register" class="text-center">Sign In a new account</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
 <!-- jQuery -->
 <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Font Awesome -->
<script src="{{ asset('dashboard/plugins/fontawesome-free/js/all.min.js') }}"></script>
  <!-- Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>
<!-- JavaScript to handle password visibility toggle -->
<script>
    // Wait for the document to be ready
    $(document).ready(function() {
      // Target the password input field and the toggle button
      var passwordField = $("#password");
      var toggleButton = $(".password-toggle-btn");

      // Attach a click event to the toggle button
      toggleButton.click(function() {
        // Change the input type to 'text' or 'password' to show or hide the password
        var type = passwordField.attr('type') === 'password' ? 'text' : 'password';
        passwordField.attr('type', type);

        // Change the icon of the toggle button to show an eye or an eye-slash
        var iconClass = type === 'password' ? 'fas fa-eye' : 'fas fa-eye-slash';
        toggleButton.find('span').removeClass().addClass(iconClass);
      });
    });
  </script>
</body>
</html>

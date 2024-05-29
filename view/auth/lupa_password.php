<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIJAWA | Lupa Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
    body {
      background-color: #30353b;
      color: white;
      font-family: 'Source Sans Pro', sans-serif;
    }

    .login-box {
      width: 400px;
      margin: 7% auto;
    }

    .login-logo b {
      color: #ffffff;
      font-size: 2rem;
    }

    .card {
      background-color: #40454b;
      color: white;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .login-card-body {
      padding: 30px;
    }

    .form-control {
      background-color: #3a3f44;
      border: 1px solid #565c61;
      color: white;
    }

    .form-control::placeholder {
      color: #b1b5b8;
    }

    .input-group-text {
      background-color: #3a3f44;
      border: 1px solid #565c61;
      color: #b1b5b8;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-info {
      background-color: #17a2b8;
      border-color: #17a2b8;
    }

    .btn-block {
      margin-bottom: 10px;
      border-radius: 5px;
    }

    a {
      color: #b1b5b8;
    }

    a:hover {
      color: white;
    }

    .login-box-msg {
      margin-bottom: 20px;
      font-size: 1.1rem;
      text-align: center;
      color: #b1b5b8;
    }

    .login-logo {
      text-align: center;
      margin-bottom: 20px;
    }

    #salah {
      font-size: 12px;
      color: red;
      display: none;
    }
  </style>
</head>

<body class="hold-transition register-page">
  <div class="login-box">
    <div class="login-logo">
      <b>LUPA PASSWORD</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <?php if(isset($_SESSION['message'])){if($_SESSION['message']!=''){echo $_SESSION['message'];$_SESSION['message']='';}} ?>

        <form action="index.php?lupa_password" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="confirm_password" id="password_confirm" class="form-control" placeholder="Confirm Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <span id="salah">Password Tidak Sesuai dengan Confirm Password</span>
          <div class="col-12">
            <input type="submit" name="submit" class="btn btn-info btn-block" value="Ubah Password">
          </div>
        </form>

        <p class="mb-0 mt-3">
          <a href="index.php?login" class="text-center">I already have an account</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script>
    $(document).ready(function () {
      $("#salah").hide();
      $("form").submit(function () {
        if ($("#password").val() != $("#password_confirm").val()) {
          $("#salah").show();
          return false;
        }
      });
    });
  </script>
</body>

</html>

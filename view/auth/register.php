<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

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
  </style>
</head>

<body class="hold-transition register-page">
  <div class="login-box">
    <div class="login-logo">
      <b>REGISTER</b>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <?php if(isset($_SESSION['message'])){if($_SESSION['message']!=''){echo $_SESSION['message'];$_SESSION['message']='';}} ?>

        <form action="index.php?register" method="post">
          <div class="input-group mb-3">
            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" name="submit" class="btn btn-info btn-block">Register</button>
          </div>
        </form>
        <br>
        <div align="center">
          <a href="index.php?login">I already have an account</a>
        </div>
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
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SIJAWA | Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .float {
      position: fixed;
      width: 60px;
      height: 60px;
      bottom: 50px;
      left: 30px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 30px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .my-float {
      margin-top: 16px;
    }
  </style>
</head>

<body style="background-color:#30353b;color:white">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=6285156912842" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center" style="background-color:#30353b;color:white">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">SIJAWA</h1>

      <nav id="navbar" class="navbar" style="background-color:#30353b;color:white">
        <ul>
          <li class="dropdown" style="background-color:#30353b;color:white"><a href="#" onclick="return checkLogin();" style="background-color:#30353b;color:white"><span>Dashboard</span></a></li>

          <?php if (isset($_SESSION['username'])) { ?>
            <li><a href="index.php?logout" class="getstarted">Logout</a></li>
          <?php } else { ?>
            <li><a href="index.php?login" class="getstarted">Login</a></li>
            <li><a href="index.php?register" class="getstarted" style="background-color:darkgray">Daftar</a></li>
          <?php } ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <script>
    function checkLogin() {
      <?php if (!isset($_SESSION['username'])) { ?>
        alert("You must log in first to access the Dashboard!");
        return false;
      <?php } else { ?>
        window.location.href = 'index.php?dashboard';
      <?php } ?>
    }
  </script>

</body>

</html>

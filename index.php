<?php
  require('vendor/autoload.php'); // panggil model dari user
  
  use chillerlan\QRCode\QRCode; // panggil model dari user
  session_start();
  $con = new mysqli("localhost","root","","db_sijawa");
  if(isset($_GET['logout'])){
    session_unset();
    header("Location:index.php"); 
  }
  
  
    else if(isset($_GET['dashboard'])){
      require('conttroler/user/dashboard.php');
    }
    else if(isset($_GET['catatan'])||isset($_GET['add_catatan'])||isset($_GET['edit_catatan'])||isset($_GET['delete_catatan'])){
      require('conttroler/user/catatan.php');
    }
    else if(isset($_GET['edukasi'])||isset($_GET['add_edukasi'])||isset($_GET['edit_edukasi'])||isset($_GET['delete_edukasi'])){
      require('conttroler/user/edukasi.php');
    }
    else if(isset($_GET['prediksi'])){
      require('conttroler/user/prediksi.php');
    }
    else if(isset($_GET['register'])){
      require('conttroler/auth/register.php');
    }
    else if(isset($_GET['lupa_password'])){
		require('conttroler/auth/lupa_password.php');
    }
    else if(isset($_GET['login'])){
		require('conttroler/auth/login.php');
    }
  else{
    require('view/user/index.php');
  }
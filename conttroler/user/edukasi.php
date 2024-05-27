<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="edukasi";
      $action=4;
      require('view/user/edukasi.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_edukasi'])){
    $class->add_edukasi();
    header('Location:index.php?edukasi');
  }
  else if(isset($_GET['delete_edukasi'])){
    $class->delete_edukasi();
    header('Location:index.php?edukasi');
  }
  else if(isset($_GET['edit_edukasi'])){
    $class->edit_edukasi();
    header('Location:index.php?edukasi');
  }
  else{
    $data=$class->get_edukasi_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }
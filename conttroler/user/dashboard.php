<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="prediksi";
      $action=4;
      require('view/user/dashboard.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
    $data=$class->get_catatan_data();
    $data1=$class->get_edukasi_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
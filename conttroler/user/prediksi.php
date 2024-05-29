<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="prediksi";
      $action=4;
      require('view/user/prediksi.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  
  $class = new users();
  if(isset($_GET['add_prediksi'])){
    $class->add_prediksi();
    header('Location:index.php?prediksi');
  }
  else if(isset($_GET['delete_prediksi'])){
    $class->delete_prediksi();
    header('Location:index.php?prediksi');
  }
  else if(isset($_GET['edit_prediksi'])){
    $class->edit_prediksi();
    header('Location:index.php?prediksi');
  }
  else{
    $data=$class->get_catatan_data();
    echo count($data);
    
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }
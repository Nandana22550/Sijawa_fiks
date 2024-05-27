<?php
  include('model/usersModel.php'); // panggil model dari user
  
  class users extends userModel{
    //main function
    public function index($data){
      global $data1;
      $title="catatan";
      $action=4;
      require('view/user/catatan.php'); // tampilkan frond ent yang terdapat dalam folder view
    }
    
  }
  $class = new users();
  if(isset($_GET['add_catatan'])){
    $class->add_catatan();
    header('Location:index.php?catatan');
  }
  else if(isset($_GET['delete_catatan'])){
    $class->delete_catatan();
    header('Location:index.php?catatan');
  }
  else if(isset($_GET['edit_catatan'])){
    $class->edit_catatan();
    header('Location:index.php?catatan');
  }
  else{
    $data=$class->get_catatan_data();
    echo count($data);
    //echo $_SERVER['REQUEST_URI'];
    $class->index($data);
  }
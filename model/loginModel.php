<?php
  
  class loginModel{
    //main function
    public function index(){}
    //Login funtion
    public function login(){
      global $con;
      $check=$con->query('SELECT * FROM user');
      $ketemu=0;
      while($c=$check->fetch_assoc()){
        $username=$c['username'];
        $id=$c['id_user'];
        $nama=$c['fullname'];
        if($username==$_POST['username'] ){
          $ketemu =1;
            $_SESSION['username']=$username;
            $_SESSION['id']=$id;
            $_SESSION['nama']=$nama;
            $_SESSION['role']="admin";
            header("Location:index.php?dashboard");
        }
      }
      
      
      
      if($ketemu==0){
        $_SESSION['message']="
                                <div class='alert alert-danger' role='alert'>
                                  Password Atau Email Mungkin Salah
                                </div>
                              ";
      }
      else{
        header("Location:index.php?dashboard");
      }
    }
  }
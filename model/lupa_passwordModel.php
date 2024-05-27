<?php
  
  class lupa_passwordModel{
    //main function
    public function index(){}
    
    //regis and inser to db
    public function regist(){
      global $con;
      
      $a = $con->query('
      select * from user
      where username = "'.$_POST['username'].'"
      ');
      $as=0;
      while($test = $a->fetch_assoc()){
        $as=1;
      }
      if($as == 0){
        $_SESSION['message']="
                                <div class='alert alert-danger' role='alert'>
                                  Username Tidak Ditemukan
                                </div>
                              ";
      }
      else{
        $con->query('
        update user set password = "'.password_hash($_POST['password'], PASSWORD_DEFAULT).'"
        where username = "'.$_POST['username'].'"
        ');
        echo $con->error;
        $_SESSION['message']="
                                <div class='alert alert-success' role='alert'>
                                    Anda berhasil melakukan Perubahan Password => silahkan login
                                </div>
                                ";
      }
    }
  }
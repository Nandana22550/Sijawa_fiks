<?php
  
  class registerModel{
    //main function
    public function index(){}
    
    //regis and inser to db
    public function regist(){
      global $con;
        $con->query('
          INSERT INTO user (fullname,username,password)
          VALUES ("'.$_POST['nama'].'","'.$_POST['username'].'","'.password_hash($_POST['password'], PASSWORD_DEFAULT).'")
        ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Registrasi => silahkan login
                              </div>
                            ";
    }
    
    public function payment(){
      global $con;
      $con->query('
        UPDATE users SET
		status = 0,
		img = "'.htmlspecialchars( basename( $_FILES["img"]["name"])).'"
		WHERE username = "'.$_POST['email'].'"
      ');
	  if (move_uploaded_file($_FILES["img"]["tmp_name"], "uploads/".basename($_FILES["img"]["name"]))) {
        echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
      }
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Registrasi => silahkan login
                              </div>
                            ";
    }
  }
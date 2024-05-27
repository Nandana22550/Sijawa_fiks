<?php
  
  class userModel{
    //main function
    public function index($data){
      
    }


        
    //get all data from user table
    public function get_catatan_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM catatan ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    //Insert user to database
    public function add_catatan()
    {
      global $con;
      $con->query('
        INSERT INTO catatan (judul_panen,tanggal_tanam,tanggal_panen,berat,harga,kualitas,kondisi_cuaca)
        VALUES ("'.$_POST['judul_panen'].'","'.$_POST['tanggal_tanam'].'","'.$_POST['tanggal_panen'].'","'.$_POST['berat'].'","'.$_POST['harga'].'","'.$_POST['kualitas'].'","'.$_POST['kondisi_cuaca'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_catatan()
    {
      global $con;
      $con->query('
        UPDATE catatan SET 
        judul_panen ="'.$_POST['judul_panen'].'",
        tanggal_tanam ="'.$_POST['tanggal_tanam'].'",
        tanggal_panen ="'.$_POST['tanggal_panen'].'",
        berat ="'.$_POST['berat'].'",
        harga ="'.$_POST['harga'].'",
        kualitas ="'.$_POST['kualitas'].'",
        kondisi_cuaca ="'.$_POST['kondisi_cuaca'].'"
        WHERE id_catatan = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_catatan()
    {
      global $con;
      $con->query('
        DELETE FROM catatan WHERE id_catatan = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }



        
    //get all data from user table
    public function get_edukasi_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM edukasi ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }
    public function add_edukasi()
    {
      global $con;
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
      move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
      $con->query('
        INSERT INTO edukasi (judul,isi,tanggal_publikasi,gambar)
        VALUES ("'.$_POST['judul'].'","'.$_POST['isi'].'","'.$_POST['tanggal_publikasi'].'","'.basename($_FILES["gambar"]["name"]).'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_edukasi()
    {
      global $con;
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
      move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
      $con->query('
        UPDATE edukasi SET 
        judul ="'.$_POST['judul'].'",
        gambar ="'.basename($_FILES["gambar"]["name"]).'",
        isi ="'.$_POST['isi'].'",
        tanggal_publikasi ="'.$_POST['tanggal_publikasi'].'"
        WHERE id_edukasi = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_edukasi()
    {
      global $con;
      $con->query('
        DELETE FROM edukasi WHERE id_edukasi = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }
    

        
    //get all data from user table
    public function get_kategori_data()
    {
      global $con;
      $get_data = $con->query("SELECT * FROM kategori ");
      echo $con->error;
      $arr=array();
      while($get =  $get_data->fetch_assoc()){
        array_push($arr, $get);
      }
      
      return $arr;
    }

    //Insert user to database
    public function add_kategori()
    {
      global $con;
      $con->query('
        INSERT INTO kategori (nama_kategori)
        VALUES ("'.$_POST['nama_kategori'].'")
      ');
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil Menambahkan Data
                              </div>
                            ";
    }

    //edit user from database
    public function edit_kategori()
    {
      global $con;
      $con->query('
        UPDATE kategori SET 
        nama_kategori ="'.$_POST['nama_kategori'].'"
        WHERE id_kategori = "'.$_POST['del'].'"
      ');
      echo $con->error;
      echo $_POST['del'];
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                
                success
                              </div>
                            ";
    }

    public function delete_kategori()
    {
      global $con;
      $con->query('
        DELETE FROM kategori WHERE id_kategori = "'.$_POST['del'].'"
      ');
      echo $con->error;
      $_SESSION['message']="
                              <div class='alert alert-success' role='alert'>
                                Anda berhasil melakukan Menghapus Data
                              </div>
                            ";
    }

  }
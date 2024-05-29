<?php 
require("view/template/header_user.php");
?>
  <style>
        body {
            background-color: #1c1e22;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        #hero h2 {
            color: #fe6a00;
            font-weight: 900;
            font-size: 48px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        #hero p {
            font-size: 18px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        .btn-get-started {
            background-color: #fe6a00;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-get-started:hover {
            background-color: #e65a00;
        }

        .about {
            background-color: #1c1e22;
            padding: 60px 0;
        }

        .about h2 {
            color: #fe6a00;
            font-weight: 900;
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
        }

        .about div {
            text-align: center;
            color: #ffffff;
            margin-bottom: 40px;
        }

        .card {
            background-color: #30353b;
            color: white;
            border: 0.5px solid lightgray;
            border-radius: 5px;
            padding: 30px;
            margin: 10px;
        }

        .card-img-top {
            width: 100%;
            height: auto;
            padding: 30px;
        }

        .card-title {
            font-size: 24px;
            margin-top: 25px;
            text-align: center;
        }

        .card-text {
            text-align: justify;
            font-size: 16px;
        }

        .image-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }

        .carousel-inner {
            border-radius: 10px;
        }

        .carousel-control {
            background-color: rgba(0, 0, 0, 0.5);
            width: 5%;
        }

        .carousel-indicators li {
            background-color: #fe6a00;
        }

        .carousel-indicators .active {
            background-color: white;
        }

        .container-red {
            background-color: #fe6a00;
            padding: 40px;
            border-radius: 10px;
        }

        .container-red h2, .container-red p {
            color: white;
        }
        

        .btn-dark {
          font-size: 16px;
        }

        .carousel-inner .item {
          background-color: #30353b;
          color: white;
          padding: 30px;
          height: 300px;
        }

        .carousel-inner .item h2 {
          color: white;
        }

        .carousel-inner .item p {
          color: white;
        }

        .carousel-inner .item img {
          border-radius: 10px;
        }

        .carousel-control .glyphicon-chevron-left,
        .carousel-control .glyphicon-chevron-right {
          color: white;
        }

        }
    </style>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/artikel/bg1.jpg)">
          <div class="carousel-container">
            <div class="container" style ="text-align:left">
              <img src="assets/img/artikel/Logo1.png" alt="SiJawa Logo" style="width:300px">
              <p class="animate__animated animate__fadeInUp">Sijawa Merupakan Platform Inovatif yang Menggabungkan Kecerdasan Buatan dengan Data Historia untuk Memberikan Prediksi Harga Cabai Jawa yang Akurat. Dengan Fokus pada Membantu Petani dan Pedagang, Kami Menyediakan Alat yang Diperlukan untuk Perencanaan Penjualan dan Pembelian yang Efektif.</p>
              <a href="index.php?login" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
            </div>
          </div>
        </div>


      </div>


    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <h2 align="center" style="color:#fe6a00;font-weight:900;font-size:50px">Mengapa Harus Sijawa?</h2>
        <div align="center" style="font-weight:400;font-size:20px">Pelajari Berbagai Fungsi SiJawa Berdasarkan Layanan untuk Membantu Kebutuhan Anda.</div>
        

      </div>
      <div class="container mt-5">
        <div class="row">
          <div class="col">
            <div class="card"  style="background-color:#30353b;color:white;border:0.5px solid lightgray">
              <img class="card-img-top" src="assets/img/slide/1.png" height="220px"alt="Card image" style="padding:30px">
              <div class="card-body">
                <h4 class="card-title">Prediksi Harga</h4>
                <p class="card-text" align="justify" >
                  SiJawa dapat memberikan prediksi harga cabai Jawa yang sangat akurat. Kami secara akan melakukan perbaruan dan meningkatkan algoritma kami agar pengguna mendapatkan informasi terkini dan terpercaya sehingga membantu petani dan pedagang dalam membuat keputusan yang lebih cerdas dan strategis.
                </p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card"  style="background-color:#30353b;color:white;border:0.5px solid lightgray">
              <img class="card-img-top" src="assets/img/slide/2.png" height="220px"alt="Card image" style="padding:30px">
              <div class="card-body">
                <h4 class="card-title">Pencatatan</h4>
                <p class="card-text" align="justify">
                  SiJawa memberikan alat yang kuat bagi pengguna untuk mengelola informasi panen dengan efesien dan akurat. Dengan kemampuan untuk menambah, melihat riwayat, dan memodifikasi data panen, pengguna dapat membuat keputusan yang lebih baik dalam perencanaan dan manajemen usaha mereka.
                </p>
              </div>
            </div>
          </div>
          
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="assets/img/slide/3.png" height="220px" alt="Card image" style="padding:30px">
              <div class="card-body">
                <h4 class="card-title">Edukasi</h4>
                <p class="card-text" align="justify">
                  SiJawa berkomitmen untuk meningkatkan pengetahuan pengguna tentang pasar cabai Jawa. Melalui sumber data edukatif yang kami sediakan, pengguna dapat memperoleh pemahaman yang lebih baik tentang dinamika pasar dan cara penggunaan data prediksi harga untuk kepentingan mereka sendiri.</br><span></span>
                </p>
              </div>
            </div>
          </div>
        </div>
        

      </div>
    </section><!-- End About Section -->
  

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <h2 align="center" style="color:#fe6a00;font-weight:900;font-size:50px">Layanan SiJawa</h2>
        <div align="center" style="font-weight:400;font-size:20px">Pelajari Berbagai Fungsi SiJawa Berdasarkan Layanan untuk Membantu Kebutuhan Anda.</div>
        

      </div>
      <div class="container mt-5" align="center">
        <img class="image-fluid" width=80% src="assets/img/slide/layanan2.jpg" style="border-radius:15px">
        

      </div>
    </section><!-- End About Section -->
    
  

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" style="background-color:#fe6a00; padding:40px;border-radius:10px">
        <div class="row">
          <div class="col-7" align="left">
            <h2>SiJawa</h2>
            <p style="font-weight:400;font-size:20px">
              <b>Dapatkan Berbagai Informasi Seputar Cabai Jawa</b><br>
              SiJawa adalah sebuah layanan yang dirancang untuk membantu para petani, pedagang, dan konsumen dalam memperoleh perkiraan harga cabai di pasar. Dengan menggunakan data historis, tren pasar, dan algoritma analisis. fitur ini memberikan prediksi harga cabai untuk periode waktu tertentu di masa yang mendatang.
            </p>
          </div>
          <div class="col-5">
            <img   src="assets/img/portfolio/1.jpg" width=100% style="border-radius:10px">
          </div>
        </div>
        <div id="myCarousel1" class="carousel slide mt-5" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <?php $get = $con->query("select * from edukasi"); while($d=$get->fetch_assoc()){?>
            <div class="item active">
              <div class="container" style="background-color:#30353b;color:white;padding:30px;height:300px">
              
                <div class="row">
                  <div class="col-7" align="left">
                    <h2><?= $d['judul']?></h2>
                    <p>
                      <?=$d['isi']?>
                    </p>
                  </div>
                  <div class="col-5">
                    <img src="uploads/<?= $d['gambar']?>" alt="Los Angeles" height=100% style="border-radius:10px">
                  </div>
                </div>
              </div>
            </div>
            <?php }?>

            <div class="item">
              <div class="container" style="background-color:#30353b;color:white;padding:30px;height:300px">
              
                <div class="row">
                  <div class="col-7" align="left">
                    <h2>SiJawa</h2>
                    <p style="font-weight:400;font-size:20px">
                      <b >Dapatkan Berbagai Informasi Seputar Cabai Jawa</b><br>
                      SiJawa adalah sebuah layanan yang dirancang untuk membantu para petani, pedagang, dan konsumen dalam memperoleh perkiraan harga cabai di pasar. Dengan menggunakan data historis, tren pasar, dan algoritma analisis. fitur ini memberikan prediksi harga cabai untuk periode waktu tertentu di masa yang mendatang.
                    </p>
                  </div>
                  <div class="col-5">
                    <img src="assets/img/artikel/2.jpg" alt="Los Angeles" height=100% style="border-radius:10px">
                  </div>
                </div>
              </div>
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" style="padding:40px;">
        <div class="row">
          <div class="col-7" align="left">
            <h2 style="color:#fe6a00;font-weight:900;font-size:50px">Tentang Kami</h2>
            <p style="font-weight:400;font-size:20px">
              SiJawa merupakan platform inovatif yang menggabungkan kecerdasan buatan dengan data historis untuk memberikan prediksi harga cabai Jawa yang akurat. Dengan fokus pada membantu petani dan pedagang, kami menyediakan alat yang diperlukan untuk perencanaan penjualan dan pembelian yang efektif.
            </p>
          </div>
          <div class="col-5">
            <img   src="assets/img/artikel/3.png" width=100% style="border-radius:10px">
          </div>
        </div>
        

      </div>
    </section><!-- End About Section -->
    
  

  </main><!-- End #main -->
  <?php require("view/template/footer_user.php");?>

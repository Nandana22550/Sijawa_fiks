<?php
require('view/template/header.php');
require('view/template/navbar.php');
require('view/template/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edukasi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?dashboard">Home</a></li>
            <li class="breadcrumb-item active">Edukasi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-book mr-1"></i>
            Edukasi
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped mt-5">
            <thead>
              <tr>
                <th>Judul</th>
                <th>Isi</th>
                <th>Tanggal Publikasi</th>
                <th>Gambar</th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach($data as $d){?>
                  <tr>
                    <td><?= $d['judul']?></td>
                    <td><?= $d['isi']?></td>
                    <td><?= $d['tanggal_publikasi']?></td>
                    <td><img src="uploads/<?= $d['gambar']?>" width="100px"></td>
                  </tr>
                <?php }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require('view/template/footer.php');
?>

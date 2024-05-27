<?php
  require('C:/laragon/www/Sijawa-master/view/template/header.php');
  require('C:/laragon/www/Sijawa-master/view/template/navbar.php');
  require('C:/laragon/www/Sijawa-master/view/template/sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Catatan Hasil Panen</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?dashboard">home</a></li>
              <li class="breadcrumb-item active">catatan</li>
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
                <i class="fas fa-users mr-1"></i>
                  Transaksi
              </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <table id="example1" class="table table-bordered table-striped mt-5">
            <thead>
              <tr>
                <th>Judul Pencatatan</th>
                <th>Tanggal Tanam</th>
                <th>Tanggal Panen</th>
                <th>Berat Cabai</th>
                <th>Harga Cabai</th>
                <th>Kualitas Cabai</th>
                <th>Kondisi Cuaca</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $i=1;
                foreach($data as $d){?>
                  <tr>
                    <td><?= $d['judul_panen']?></td>
                    <td><?= $d['tanggal_tanam']?></td>
                    <td><?= $d['tanggal_panen']?></td>
                    <td><?= $d['berat']?></td>
                    <td><?= $d['harga']?></td>
                    <td><?= $d['kualitas']?></td>
                    <td><?= $d['kondisi_cuaca']?></td>
                    <td align="center"><button type="button" class="btn btn-sm bg-warning" data-toggle="modal" data-target="#exampleModalss<?=$i;?>"><i class="fas fa-edit"></i></button></td>
                    <td align="center"><button type="button" class="btn btn-sm bg-danger" data-toggle="modal" data-target="#exampleModals<?=$i;?>"><i class="fas fa-trash"></i></button></td>
                    </tr>
                    <div class="modal fade" id="exampleModals<?=$i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="index.php?delete_catatan">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            Apakah anda yakin ingin menghapus data ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="text" value="<?= $d['id_catatan']; ?>" name="del"style="display:none">
                            <input  type="submit" class="btn btn-sm bg-danger" value="Delete">
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    
                    
                    <div class="modal fade" id="exampleModalss<?=$i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                      <form method="post" action="index.php?edit_catatan"  enctype="multipart/form-data">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">EDIT Data </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
      
      
                          <div class="modal-body"> 
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Judul Panen</label>
                              <div class="col-sm-6">
                                <input type="" name="judul_panen" class="form-control" placeholder="" value="<?=$d['judul_panen']?>" required>
                              </div>
                            </div> 
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Tanggal Tanam</label>
                              <div class="col-sm-6">
                                <input type="date" name="tanggal_tanam" class="form-control" placeholder="" value="<?=$d['tanggal_tanam']?>" required>
                              </div>
                            </div> 
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Tanggal Panen</label>
                              <div class="col-sm-6">
                                <input type="date" name="tanggal_panen" class="form-control" placeholder="" value="<?=$d['tanggal_panen']?>" required>
                              </div>
                            </div> 
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Berat</label>
                              <div class="col-sm-6">
                                <input type="number" name="berat" class="form-control" placeholder="" value="<?=$d['berat']?>" required>
                              </div>
                            </div>  
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Harga</label>
                              <div class="col-sm-6">
                                <input type="number" name="harga" class="form-control" placeholder="" value="<?=$d['harga']?>" required>
                              </div>
                            </div>  
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Kualitas</label>
                              <div class="col-sm-6">
                                <select type="" name="kualitas" class="form-control" placeholder="" required>
                                  <option value="Baik">Baik</option>
                                  <option value="Cukup">Cukup</option>
                                  <option value="Buruk">Buruk</option>
                                </select>
                              </div>
                            </div>  
                            <div class="form-group row" style="margin-left:-120px;">
                              <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Kondisi Cuaca</label>
                              <div class="col-sm-6">
                                <select type="" name="kondisi_cuaca" class="form-control" placeholder="" required>
                                  <option value="Kemarau">Kemarau</option>
                                  <option value="Hujan">Hujan</option>
                                </select>
                              </div>
                            </div>  
                          </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="text" value="<?= $d['id_catatan']; ?>" name="del"style="display:none">
                          <input  type="submit" class="btn btn-sm bg-warning" value="EDIT">
                        </div>
                      </div>
                      </form>
                      </div>
                    </div>
                  <?php

                   $i++;}
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
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form method="post" action="index.php?add_catatan"  >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body"> 
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Judul Panen</label>
          <div class="col-sm-6">
            <input type="" name="judul_panen" class="form-control" placeholder="" required>
          </div>
        </div> 
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Tanggal Tanam</label>
          <div class="col-sm-6">
            <input type="date" name="tanggal_tanam" class="form-control" placeholder="" required>
          </div>
        </div> 
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Tanggal Panen</label>
          <div class="col-sm-6">
            <input type="date" name="tanggal_panen" class="form-control" placeholder="" required>
          </div>
        </div> 
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Berat</label>
          <div class="col-sm-6">
            <input type="number" name="berat" class="form-control" placeholder="" required>
          </div>
        </div>  
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Harga</label>
          <div class="col-sm-6">
            <input type="number" name="harga" class="form-control" placeholder="" required>
          </div>
        </div>  
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Kualitas</label>
          <div class="col-sm-6">
            <select type="" name="kualitas" class="form-control" placeholder="" required>
              <option value="Baik">Baik</option>
              <option value="Cukup">Cukup</option>
              <option value="Buruk">Buruk</option>
            </select>
          </div>
        </div>  
        <div class="form-group row" style="margin-left:-120px;">
          <label class="col-sm-2 col-form-label" style="margin-left: 150px;">Kondisi Cuaca</label>
          <div class="col-sm-6">
            <select type="" name="kondisi_cuaca" class="form-control" placeholder="" required>
              <option value="Kering">Kering</option>
              <option value="Basah">Basah</option>
            </select>
          </div>
        </div>  
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input  type="submit" class="btn btn-primary" onclick="AlertMessage()" value="Simpan data">
      </div>
    </div>

    <script>
  function AlertMessage(){
    alert("Data Berhasil Ditambah")
  }
</script>
     </form>
  </div>
</div>
<?php
  require('C:/laragon/www/Sijawa-master/view/template/footer.php');
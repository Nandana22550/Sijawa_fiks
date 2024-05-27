<?php 
  if(isset($_GET['api_jadwal'])){
    $get_data = $con->query("SELECT * FROM jadwal  where 
          tanggal = '".$_GET['tanggal']."'  
          and  jam = '".$_GET['jam']."' 
          and  id_pengajar = '".$_GET['id_pengajar']."' ");
		  if($get_data->num_rows){
			echo $get_data->fetch_assoc()['kegiatan'];
		  }
		  else{
			echo "";
		  }
  }
  else if(isset($_GET['api_jadwals'])){
    $get_data = $con->query("SELECT * FROM jadwals  where 
          tanggal = '".$_GET['tanggal']."'  
          and  waktu = '".$_GET['jam']."' 
          and  id_siswa = '".$_GET['id_siswa']."' ");
		  if($get_data->num_rows){
			echo $get_data->fetch_assoc()['kegiatan'];
		  }
		  else{
			echo "";
		  }
  }
  else if(isset($_GET['api_qr'])){
	echo '<div align="center"><img src="'.(new QRCode)->render($_GET['tanggal']).'" alt="QR Code" /></div>';
  }
  else if(isset($_GET['api_absensi'])){
    $get_data = $con->query("SELECT * FROM absensi  where 
          tanggal = '".$_GET['tanggal']."'  
          and id_murid = '".$_GET['id_siswa']."'  ");
		  if($get_data->num_rows){
			$get_data=$get_data->fetch_assoc();
			echo $get_data['status'].",".$get_data['keterangan'].",".$get_data['waktu_keterlambatan'];
		  }
		  else{
			echo "N/A,-,-";
		  }
  }


  else if(isset($_GET['api_tugas'])){
    
	$get_data = $con->query("SELECT * FROM tugas  where 
	id_matpel = '".$_GET['id_matpel']."'  
	and  id_siswa = '".$_GET['id_siswa']."' 
	and  kategori = '".$_GET['kategori']."' ");
	echo $con->error;
	$arr=array();
	while($get =  $get_data->fetch_assoc()){
	  array_push($arr, $get);
	}
	foreach($arr as $d){
	?>
	
	<div class="col-3" style="border:1px solid black;text-align:center">
        <?=$d['nama_tugas']?>
    </div>
    <div class="col-3" style="border:1px solid black;text-align:center">
		<?=$d['nilai']?>
    </div>
    <div class="col-3" style="border:1px solid black;text-align:center">
		<?=$d['remedial']?>
    </div>
    <div class="col-3" style="border:1px solid black;text-align:center">
        -
    </div>
	
	
	<?php  }
  }

  else if(isset($_GET['api_absensis'])){
    
	$get_data = $con->query("SELECT count(*) as jumlah,absensi.tanggal,kelas.id_kelas,kelas.nama_kelas FROM absensi join siswa on absensi.id_murid = siswa.id_siswa  join kelas on siswa.id_kelas = kelas.id_kelas where absensi.tanggal >= '".$_GET['awal']."-07-01' AND absensi.tanggal <= '".$_GET['akhir']."-06-30' and kelas.id_kelas='".$_GET['kelas']."' group by kelas.id_kelas,absensi.tanggal ");
	echo $con->error;
	$arr=array();
	while($get =  $get_data->fetch_assoc()){
	  $g = $con->query("SELECT count(*) as hadir FROM absensi join siswa on absensi.id_murid = siswa.id_siswa  join kelas on siswa.id_kelas = kelas.id_kelas where absensi.status='Hadir' and absensi.tanggal='".$get['tanggal']."'  and kelas.id_kelas='".$get['id_kelas']."' group by kelas.id_kelas,absensi.tanggal");
	  
	  if($g->num_rows){
		$get['hadir']=$g->fetch_assoc()['hadir'];
	  }
	  else{
		$get['hadir']=0;
	  }
	  $g = $con->query("SELECT count(*) as tidak_hadir FROM absensi join siswa on absensi.id_murid = siswa.id_siswa  join kelas on siswa.id_kelas = kelas.id_kelas where absensi.status='Tidak Hadir' and absensi.tanggal='".$get['tanggal']."'  and kelas.id_kelas='".$get['id_kelas']."' group by kelas.id_kelas,absensi.tanggal");
	  
	  if($g->num_rows){
		$get['tidak_hadir']=$g->fetch_assoc()['tidak_hadir'];
	  }
	  else{
		$get['tidak_hadir']=0;
	  }
	  array_push($arr, $get);
	}
	foreach($arr as $d){
	?>
	
				<tr>
                    <td><?= $d['tanggal']?></td>
                    <td ><?= $d['nama_kelas']?></td>
                    <td ><?= $d['jumlah']?></td>
                    <td ><?= $d['hadir']?></td>
                    <td ><?= $d['tidak_hadir']?></td>
                    </tr>
	
	
	<?php  }
  }
  else if(isset($_GET['api_pengajar'])){
    $get_data = $con->query("SELECT * FROM jadwal  where 
	tanggal = '".$_GET['tanggal']."'  
	and  jam = '".$_GET['jam']."' 
	and  id_pengajar = '".$_GET['id_pengajar']."' ");
	if($get_data->num_rows){
	  echo $get_data->fetch_assoc()['kegiatan'];
	}
	else{
	  echo "";
	}
  }
  else if(isset($_GET['api_dashboard'])){
    $get_data = $con->query("SELECT * FROM jadwal  where 
	tanggal = '".$_GET['tanggal']."'  
	and  jam = '".$_GET['jam']."' 
	and  id_pengajar = '".$_GET['id_pengajar']."' ");
	if($get_data->num_rows){
	  echo $get_data->fetch_assoc()['kegiatan'];
	}
	else{
	  echo "";
	}
  }
  else if(isset($_GET['api_dashboard_siswa'])){
    $get_data = $con->query("SELECT * FROM jadwals  where 
	tanggal = '".$_GET['tanggal']."'  
	and  waktu = '".$_GET['jam']."' 
	and  id_siswa = '".$_GET['id_siswa']."' ");
	if($get_data->num_rows){
	  echo $get_data->fetch_assoc()['kegiatan'];
	}
	else{
	  echo "";
	}
  }
  else if(isset($_GET['api_dashboard_pengajar'])){
    $get_data = $con->query("SELECT * FROM jadwal  where 
	tanggal = '".$_GET['tanggal']."'  
	and  jam = '".$_GET['jam']."' 
	and  id_pengajar = '".$_GET['id_pengajar']."' ");
	if($get_data->num_rows){
	  echo $get_data->fetch_assoc()['kegiatan'];
	}
	else{
	  echo "";
	}
  }
<?php

$url = 'http://127.0.0.1:5001/endpoint';
$data = array(
    'tanggal' => $_POST['tanggal']
);

// Inisialisasi sesi cURL
$ch = curl_init($url);

// Konfigurasi opsi cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Eksekusi request dan tangkap responsenya
$jsondata = curl_exec($ch);

// Cek jika ada error
if(curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Tutup sesi cURL
curl_close($ch);

// Menampilkan response
$data = json_decode($jsondata, true);
// echo $data;

include('view/user/prediksihasil.php');

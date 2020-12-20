<?php
    $pemilik = $_POST['pemilik'];
    $ktp = $_POST['ktp'];
    $stnk = $_POST['stnk'];
    $bpkb = $_POST['bpkb'];
   $scktp = $_POST['scktp'];
  $scstnk = $_POST['scstnk'];
  $scbpkb = $_POST['scbpkb'];

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'pajak';
$db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if($db->connect_error){
    die("connection failed : " . $db->connect_error);
}

$stmt = $db->prepare("INSERT INTO tb_pajak (pemilik, ktp, stnk, bpkb, scktp, scstnk, scbpkb) values (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $pemilik, $ktp, $stnk, $bpkb, $scktp, $scstnk, $scbpkb);
$stmt->execute();

echo "nama pemilik kendaraan sudah di perbaruhi";
$stmt->close();
$db->close();
<html>
<head>
    <title> Hasil </title>
</head>
<?php
    include('koneksi.php');
    $pemilik = $_POST['pemilik'];
    $ktp = $_POST['ktp'];
    $stnk = $_POST['stnk'];
    $bpkb = $_POST['bpkb'];
   $scktp = $_POST['scktp'];
   $scstnk = $_POST['scstnk'];
   $scbpkb = $_POST['scbpkb'];
  
?>

    <p> Anda sudah membayar pajak dengan nama <?php echo $pemilik;
    ?>
    </p>
    <p> no ktp anda <?php echo $ktp;
    ?>
    </p>
    <p>no stnk anda <?php echo $stnk;
    ?>
    </p>
    <p> nomor bpkb <?php echo $bpkb;
    ?>
    </p>
    <p> <?php echo $scktp; ?>
    <p> <?php echo $scstnk; ?>
    <p> <?php echo $scbpkb; ?>
</html>
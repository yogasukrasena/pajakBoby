<?php
    if($_POST){
      $pemilik = $_POST['pemilik'];
    $ktp = $_POST['ktp'];
    $stnk = $_POST['stnk'];
    $bpkb = $_POST['bpkb'];
   $scktp = $_POST['scktp'];
  $scstnk = $_POST['scstnk'];
  $scbpkb = $_POST['scbpkb'];
$response = array (
  'pemilik' => $pemilik,
  'ktp' => $ktp,
  'stnk' =>$stnk,
  'bpkb' => $bpkb,
  'scktp' => $scktp,
  'scstnk' => $scstnk,
  'scbpkb' => $scbpkb,
);
echo json_encode($response);
    }
    ?>
<html>
<head>
    <title>DIREKTORAT JENDERAL PAJAK KEMENTERIAN KEUANAGN</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="pjk.css">
</head>
<body>
    <div class="header">
        <img src ="Untitled-1.jpg" width ="1536px" height ="150px" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">DIREKTORAT JENDERAL PAJAK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">profill</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Peraturan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">kurs </a>
                <a class="dropdown-item" href="#">tax treaty</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </form>
        </div>
      </nav>
      
       <div id="isi">
       <p><h1><center> FORM BALIK NAMA </center></h1></p>
         <div class="letak">
           <form action="proses.php" method="post">

            <!--nama pemilik baru-->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Nama pemilik baru</span>
              </div>
              <input type="text" class="form-control" id="NamaPemilikBaru"  name="pemilik" placeholder="masukan nama pemilik baru">
          </div>

          <!--Nomor telpon pemesan bolu-->
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"> Masukkan Nomor KTP anda </span>
             </div>
              <input type="number" class="form-control" id="NomorKtp" name="ktp" placeholder="masukan Nomor ktp">
            </div>

          <!--Nomor telpon pemesan bolu-->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"> Masukkan Nomor STNK anda </span>
              </div>
               <input type="number" class="form-control" id="Nomorstnk" name="stnk" placeholder="masukan Nomor stnk">
            </div>
                                 
         <!--Nomor telpon pemesan bolu-->
           <div class="input-group mb-3">
             <div class="input-group-prepend">
               <span class="input-group-text" id="basic-addon1"> Masukkan nomor BPKB </span>
             </div>
              <input type="number" class="form-control" id="NomorBbkb"  name="bpkb" placeholder="masukan Nomor Bbkb">
            </div>                  
     
           <div class="input-group mb-3">
             <div class="input-group-prepend">
               <span class="input-group-text" id="inputGroupFileAddon01">Scan KTP</span>
             </div>
             <div class="custom-file">
               <input type="file" class="custom-file-input" id="inputGroupFile01" name="scktp" aria-describedby="inputGroupFileAddon01">
               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
           </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Scan STNK</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="scstnk" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupFileAddon01">Scan BPKB</span>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01" name="scbpkb" aria-describedby="inputGroupFileAddon01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>

          <!--Sumbit,Reset,Tampilkan Ke SideBar-->
          <center><button type="submit" class="btn btn-primary">Daftar</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          </center>
         
         <div class="detail"></div>

<script type="text/javascript">
$(form$myform).submit(function(){
    var form = $(this).serialize();
    $.post('ajax.php', form, function(response){
        $('.msg').html(response.msg);
        $('detail').html('Nama pemilik baru: '+ response.pemilik + 'dengan no ktp: '+ response.ktp 'degan no bpkb: ' + response.bpkb 'dengan no scktp: ' + response.scktp 'denagn scstnl: ' + response.scstnk 'dengan sckpkb: ' + response.scbpkb);
    },"json");
    return false;
})
         </div>
      </div>
      <div class
        <div id="footer">
            <hr>
            <center> &copy;BobyRama All Right Reserved<br>2018</center>
        </div>

        </div>
</form>
</body>
</html>
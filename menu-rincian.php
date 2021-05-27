<?php


  include 'function-beli.php';

  $gambar;


  

  if(isset($_POST["submit"])){

    $nm = $_POST["nama_barang"];
    $hm = $_POST["harga_barang"];
    $jb = $_POST["jumlah_beli"];
    $np = $_POST["nama_pembeli"];
    $ar = $_POST["alamat_rumah"];

    $beli = new beli($nm,$hm,$jb,$np,$ar);


    $totalPembayaran = $hm * $jb;

    $beli->tampilGambar($nm);

    





  }

  
 



?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="beli.css">

</head>
<body>

<div class="header">
  <h1>TOKO MAKANAN SERBAMURAH</h1>
  <h4>HARGA PREMIUM RASA PERTAMAX</h4>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="menu-belanja.php">Belanja</a>
  <a href="menu-tentang-kami.php">Tentang Kami</a>
</div>

<div class="row">

    <div class="centercolumn">
        
        <form action="index.php" method="post">

        <center>

            <div style="width: 50%;" class="card">

                <h3>RINCIAN PESANAN</h3>

                <div class="row">

                <div class="col-75">

                <img style="height: 150px; width: 200px;" src="image/<?=$beli->getGambarBarang();?>" alt="">
                       
                    </div>

                 
                    
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="fname">Nama Barang</label>
                    </div>
                    <div class="col-75">
                        <input readonly type="text" id="fname" name="nama_barang" autocomplete="off" value="<?=$beli->getNamaBarang();?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Harga Per Barang</label>
                    </div>
                    <div class="col-75">
                        <input readonly type="text" id="fname" name="harga_barang" autocomplete="off" value="<?=$beli->getHargaBarang();?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Jumlah Beli</label>
                    </div>
                    <div class="col-75">
                        <input readonly type="text" id="fname" name="jumlah_beli" autocomplete="off" value="<?=$beli->getJumlahBeli();?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Nama Pembeli</label>
                    </div>
                    <div class="col-75">
                        <input readonly type="text" id="fname" name="nama_pembeli" autocomplete="off" value="<?=$beli->getNamaPembeli();?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Alamat Rumah</label>
                    </div>
                    <div class="col-75">
                        <input readonly type="text" id="fname" name="alamat_pembeli" autocomplete="off" value="<?=$beli->getAlamatRumah();?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="fname">Total Pemabayaran</label>
                    </div>
                    <div class="col-75">
                        <input readonly type="text" id="fname" name="total_pembayaran" autocomplete="off" value="Rp.<?=$totalPembayaran?>">
                    </div>
                </div>
                <div style="margin-top: 20px;" class="row">
                    <input type="submit" value="Submit" name="BELI LAGI">
                </div>

                <h4>TERIMA KASIH ATAS PEMBELIAN ANDA</h4>

            </div>

        </center>

</form>
    
    </div>

</div>

<div class="footer">
  <h4>Copyright &#169; 2021 Bintang Motor. All rights reserved.</h4>
</div>

</body>
</html>
s<?php

  include 'function-beli.php';

  $motor = new motor();

  if(isset($_POST["beliKnalpot"])){

    $motor->setNamaBarang("Knalpot");
    $motor->setHargaBarang("500000");

  }

  if(isset($_POST["beliVelg"])){

    $motor->setNamaBarang("Velg");
    $motor->setHargaBarang("200000");

  }

  if(isset($_POST["beliShock"])){

    $motor->setNamaBarang("Shockbreaker");
    $motor->setHargaBarang("700000");

  }

  if(isset($_POST["beliBan"])){

    $motor->setNamaBarang("Ban");
    $motor->setHargaBarang("200000");

  }

  if(isset($_POST["beliAki"])){

    $motor->setNamaBarang("Aki");
    $motor->setHargaBarang("100000");

  }

  if(isset($_POST["beliDisk"])){

    $motor->setNamaBarang("Diskbrake");
    $motor->setHargaBarang("50000");

  }

  if(isset($_POST["beliOli"])){

    $motor->setNamaBarang("Oli");
    $motor->setHargaBarang("40000");

  }

  if(isset($_POST["beliTune"])){

    $motor->setNamaBarang("Tune Up");
    $motor->setHargaBarang("70000");

  }
  if(isset($_POST["beliCuci"])){

    $motor->setNamaBarang("Cuci Motor");
    $motor->setHargaBarang("10000");

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
  <h1>BINTANG MOTOR</h1>
  <h4>PUSAT SPAREPART MOTOR TERLENGKAP DAN TERMURAH</h4>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="menu-belanja.php">Belanja</a>
  <a href="menu-tentang-kami.php">Tentang Kami</a>
</div>

<div class="row">

  <form action="menu-rincian.php" method="post">

    <div class="centercolumn">

    <div class="card">

      <h2>PESANAN ANDA</h2>

      <div class="row">
        <div class="col-25">
          <label for="fname">Nama Barang</label>
        </div>
        <div class="col-25">
          <input readonly type="text" id="fname" name="nama_barang" autocomplete="off" value="<?php echo $motor->getNamaBarang();?>">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="fname">Harga Per Barang</label>
        </div>
        <div class="col-25">
          <input readonly type="number" id="fname" name="harga_barang" autocomplete="off" value="<?php echo $motor->getHargaBarang();?>">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="fname">Jumlah Beli</label>
        </div>
        <div class="col-25">
          <input  type="number" id="fname" name="jumlah_beli" autocomplete="off">
        </div>
      </div>

    </div>

    <div class="card">

  

      <div class="row">
        <div class="col-25">
          <label for="fname">Nama</label>
        </div>
        <div class="col-25">
          <input type="text" id="fname" name="nama_pembeli" autocomplete="off" >
        </div>
      </div>


    <div class="row">
      <div class="col-25">
        <label for="subject">Alamat Rumah</label>
      </div>
      <div class="col-25">
        <textarea id="subject" name="alamat_rumah" style="height:200px" autocomplete="off"></textarea>
      </div>
    </div>

    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>

    </div>

    </form>

    </div>

</div>

<div class="footer">
  <h4>Copyright &#169; 2021 Bintang Motor. All rights reserved.</h4>
</div>

</body>
</html>
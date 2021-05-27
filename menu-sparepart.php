<?php

  include 'function-beli.php';

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
  <h1>BINTANG MOTOR</h1>
  <h4>PUSAT PENJUALAN SPAREPART MOTOR  TERMURAH DAN TERLENGKAP</h4>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="menu-belanja.php">Belanja</a>
  <a href="menu-tentang-kami.php">Tentang Kami</a>
</div>

<div class="row">

    <form action="proses-beli.php" method="post">

    <div style="display: flex;" class="centercolumn">
        

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>AKI Motor</h3>

            <a href="menu-modification.php">
            <img style=" height: 150px; width: 200px;" src="image/Aki-Motor.jpg" alt="">
            </a>

            <br>

            <h4>Rp100.000</h4>

            <input type="submit" value="BELI" name="beliAki">



        </div>

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>Ban </h3>

            <a href="menu-sparepart.php">

            <img style="height: 150px; width: 200px;" src="image/maxxisban.jpg" alt="">

            </a>

            <h4>Rp200.000</h4>


            <input type="submit" value="BELI" name="beliBan">

 


        </div>

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>Diskbrake</h3>

            <a href="menu-sparepart.php">

            <img style="height: 150px; width: 200px;" src="image/diskbrake.jpg" alt="">

            </a>

            <h4>Rp50.000</h4>


            <input type="submit" value="BELI" name="beliDisk">

 


        </div>


    </div>


    </form>

  
</div>

<div class="footer">
  <h4>Copyright &#169; 2021 Bintang Motor. All rights reserved.</h4>
</div>

</body>
</html>
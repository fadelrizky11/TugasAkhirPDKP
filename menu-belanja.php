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
  <h1> BINTANG MOTOR</h1>
  <h4>PUSAT SPAREPART MOTOR TERLENGKAP DAN TERMURAH</h4>
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

            <h3>MODIFICATION PART</h3>

            <a href="menu-modification.php">
            <img style=" height: 150px; width: 200px;" src="image/knalpot.jpg" alt="">
            </a>



        </div>

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>SPAREPART</h3>
            <a href="menu-sparepart.php">

            <img style="height: 150px; width: 200px;" src="image/Aki-Motor.jpg" alt="">

            </a>

 


        </div>

        <div style="width: 25%; margin-right: 20px;" class="card">

            <h3>MAINTENANCE</h3>
            <a href="menu-maintenance.php">

            <img style="height: 150px; width: 200px;" src="image/Tune Up.jpg" alt="">

            </a>




        </div>



    </div>


    </form>

  
</div>

<div class="footer">
  <h4>Copyright &#169; 2021 Bintang Motor. All rights reserved.</h4>
</div>

</body>
</html>
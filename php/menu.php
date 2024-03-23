<?php
include("conn.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    * {
      font-family: Montserrat, sans-serif;
      color: #176bcd;
      padding: 10px;
      background-color: #f1f5f8;
    }

    .logo {
      text-align: center;
      letter-spacing: 5px;
      font-size: 30px;
    }

    .top {
      display: grid;
      grid-template-rows: 15px 15px;
      grid-template-columns: 1fr 3fr 1fr;
      text-align: center;
      font-size: 30px;
    }

    img {
      width: 300px;
      height: 225px;
      padding: 5px;
      object-fit: cover;
    }

    .menu {
      display: grid;
      grid-template-columns: auto auto auto;
      padding: 10px;
      text-align: center;

      white-space: nowrap;
    }

    input#searchbar {
      background-color: white;
      width: 80%;
      border-color: #176bcd;
      border-radius: 6px;
      color: #176bcd;
    }

    .button_container {
      margin-top: 10px;
      text-align: center;
      /* Center the content horizontally */
    }

    input[type=button],
    input[type=submit] {
      background-color: #176bcd;
      color: white;
      height: 40px;
      width: 100px;
      border-radius: 13px;
    }

    h3 {
      font-size: 28px;
    }

    h6 {
      font-size: 18px;
    }
  </style>
  <title>Document</title>
</head>

<body>
  <div class="logo">
    <strong>RESTAURANT </strong>
    <br />
    <br />
  </div>

  <div class="top">
    <div class="top_left">
      <i class="bx bx-menu"></i>
    </div>
    <div class="top_center">
      <input type="text" name="searchbar" id="searchbar" placeholder="Search" />
    </div>
    <div class="top_right">
      <i class="bx bx-search"></i>
    </div>
  </div>

  <br />
  <br />
  <br />
  <form action="cart.php" method="post">
    <div class="menu">
      <div class="nasi_goreng">
        <img src="https://www.kitchensanctuary.com/wp-content/uploads/2020/07/Nasi-Goreng-square-FS-57.jpg" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="nasi_goreng" />
        <h3>Nasi Goreng</h3>
        <h6>RM 5.00</h6>
      </div>
      <div class="mee_goreng">
        <img src="https://img.delicious.com.au/qKRbrVEu/del/2017/07/malaysian-chicken-mee-goreng-49049-2.jpg" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="mee_goreng" />
        <h3>Mee Goreng</h3>
        <h6>RM 6.00</h6>
      </div>
      <div class="roti_canai">
        <img src="https://miro.medium.com/v2/resize:fit:1400/0*WbMLsLR4_O2sawif.jpeg" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="roti_canai" />
        <h3>Roti Canai</h3>
        <h6>RM 2.00</h6>
      </div>
      <div class="nasi_lemak">
        <img src="https://www.andy-cooks.com/cdn/shop/articles/20231116072724-c2-a9andy_cooks_thumbnails_nasi_lemak_01.jpg?v=1700389619" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="nasi_lemak" />
        <h3>Nasi Lemak</h3>
        <h6>RM 2.50</h6>
      </div>
      <div class="ayam_penyet">
        <img src="https://resepichenom.com/media/cache/b2/a1/b2a155655915f059907e12b82f216491.jpg" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="ayam penyet" />
        <h3>Ayam Penyet</h3>
        <h6>RM 7.00</h6>
      </div>
      <div class="keuy_teow">
        <img src="https://images.aws.nestle.recipes/resized/c93a58aaee6d3416424e29014057b78c_kuey-teow-goreng-024_944_531.jpg" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="kuey_teow" />
        <h3>Kuey Teow</h3>
        <h6>RM 4.00</h6>
      </div>
      <div class="teh_tarik">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9ZLQjkUtuc9zzkg1yfhDCXRHmuAM6tXqZ8apKLmmbypklB1bKLLpLKJKR4g6EYCCiKRI&usqp=CAU" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="teh_tarik" />
        <h3>Teh Tarik</h3>
        <h6>RM 2.00</h6>
      </div>
      <div class="Kopi">
        <img src="https://neurosciencenews.com/files/2023/06/coffee-brain-caffeine-neuroscincces.jpg" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="kopi" />
        <h3>Coffee</h3>
        <h6>RM 2.00</h6>
      </div>
      <div class="Bandung_Soda">
        <img src="https://p16-va.lemon8cdn.com/tos-alisg-v-a3e477-sg/991fd0b8d5d54118ad0699eddeb1d7f3~tplv-tej9nj120t-origin.webp" />
        <input type="number" value="0" style="
              display: inline-flex;
              width: 60px;
              position: relative;
              top: -20px;
            " min="0" name="bandung_soda" />
        <h3>Bandung Soda</h3>
        <h6>RM 3.00</h6>
      </div>
    </div>

    <div class="button_container">
      <a href="index.php"><input type="button" value="Logout"></a>
      <a href="index.php"><input type="submit" value="View Cart"></a>
    </div>
  </form>


</body>

</html>
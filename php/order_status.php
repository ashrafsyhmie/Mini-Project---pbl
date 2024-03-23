<?php
include("conn.php");
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Cart.css" />
  <title>Order status</title>

  <style>
    * {
      font-family: monospace;
    }

    #Order2 {
      display: none;
    }

    .status {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 300px;
    }

    .button_container {
      margin-top: 10px;
      text-align: center;
      /* Center the content horizontally */
    }

    input {
      font-weight: 500;
      color: white;
      background-color: #176bcd;
      border-radius: 13px;
      border: none;
      font-size: 18px;

      width: 200px;
    }

    #myButton {
      display: none;
    }
  </style>
</head>

<body>
  <h1 style="text-align: center;">EsWarung</h1>
  <table border="0" align="center">

    <tr>
      <td width=300>

      </td>
      <td width=500>
        <h2 style="text-align: center">Order Status</h2>

      </td>
      <td width=300>
        <h2 style="text-align: right">Order Number: <?php echo $_SESSION["order_id"] ?></h2>
      </td>
    </tr>
  </table>
  <br>
  <br>
  <br>



  <fieldset style="height: 300px; margin:0 auto; width:1200px">
    <h1 class=" status" id="order">Your order is being processed</h1>
    <div class="button_container" id="myButton">
      <a href="menu.php">
        <input type="button" value="Return to Menu" style="
            background-color: #176bcd;
            color: white;
            height: 33px;
            width: 150px;
            border-radius: 13px;" />
      </a>

    </div>
  </fieldset>

  <br />

  <script>
    setTimeout(function() {
      document.getElementById("order").innerHTML = "Your order is done";
    }, 3000);

    function showButton() {
      var button = document.getElementById("myButton");
      button.style.display = "block";
    }
    setTimeout(showButton, 3000);
  </script>
</body>

</html>
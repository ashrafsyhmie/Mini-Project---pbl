<?php
include("conn.php");
session_start();

$nasi_goreng  = $_SESSION["nasi_goreng"];
$mee_goreng  = $_SESSION["mee_goreng"];
$roti_canai = $_SESSION["roti_canai"];
$nasi_lemak  = $_SESSION["nasi_lemak"];
$ayam_penyet  = $_SESSION["ayam_penyet"];
$kuey_teow  = $_SESSION["kuey_teow"];
$teh_tarik  = $_SESSION["teh_tarik"];
$kopi  = $_SESSION["kopi"];
$bandung_soda = $_SESSION["bandung_soda"];

$sql = "INSERT INTO menu (nasi_goreng, mee_goreng, roti_canai, nasi_lemak, ayam_penyet, kuey_teow, teh_tarik, kopi, bandung_soda)
        VALUES ('$nasi_goreng', '$mee_goreng', '$roti_canai', '$nasi_lemak', '$ayam_penyet', '$kuey_teow', '$teh_tarik', '$kopi', '$bandung_soda')";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/css/payment.css" />
  <title>Payment Page</title>
  <style>
    * {
      font-family: monospace;
    }

    .payment {
      text-align: center;
      width: 100%;
    }

    table {
      font-size: 13px;
    }



    button {
      background-color: #263b80;
      color: white;
      border-radius: 10px;
    }


    .payment_box {
      border-radius: 20px;
      background-color: #f1f5f8;
      padding: 20px;
    }

    img {
      border-radius: 20px;
    }
  </style>
</head>

<body>
  <p align=center>
    <?php
    if (mysqli_query($conn, $sql)) {
      echo "Order placed successfully!";
    } else {
      echo "Error: " . mysqli_error($conn);
    } ?></p>

  <div class="payment">
    <h1>Payment Section</h1>

    <h2>Please fill in the requested information</h2>
  </div>
  <form action="order_status.php">
    <table align="center" border="0
        ">
      <tr>
        <td>
          <table border="0" align="center" class="payment_box">
            <tr align="center">
              <td colspan="2">
                First name
                <br />
                <input type="text" required />
              </td>
              <td colspan="2">
                Last Name
                <br />
                <input type="text" required />
              </td>
            </tr>
            <tr align="center">
              <td colspan="2">
                Card Number
                <br />
                <input type="number" required />
              </td>
              <td width="100">
                Expiration
                <br />
                <input type="text" required size="5" placeholder="XX/XX" style="width: 50px" />
              </td>
              <td width="100">
                CVV
                <br />
                <input type="number" required size="3" style="width: 40px" placeholder="XXX" />
              </td>
            </tr>
            <tr align="center">
              <td colspan="2">
                Postal Code
                <br />
                <input type="number" required />
              </td>
              <td colspan="2">
                Email
                <br />
                <input type="email" required />
              </td>
            </tr>
            <tr>
              <td><br /></td>
            </tr>
          </table>
        </td>

      </tr>
    </table>
    <br />
    <div class="button-container" style="text-align: center">
      <input type="submit" value="Done" style="
            background-color: #176bcd;
            color: white;
            height: 33px;
            width: 100px;
            border-radius: 13px;
          " />
    </div>
  </form>

</body>

</html>

<?php
mysqli_close($conn);


?>
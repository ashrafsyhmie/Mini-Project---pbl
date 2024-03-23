<?php

include("conn.php");
session_start();

// Assuming your form method is POST
$nasi_goreng = $_POST["nasi_goreng"];
$mee_goreng = $_POST["mee_goreng"];
$roti_canai = $_POST["roti_canai"];
$nasi_lemak = $_POST["nasi_lemak"];
$ayam_penyet = $_POST["ayam_penyet"];
$kuey_teow = $_POST["kuey_teow"];
$teh_tarik = $_POST["teh_tarik"];
$kopi = $_POST["kopi"];
$bandung_soda = $_POST["bandung_soda"];

$_SESSION["nasi_goreng"] = $nasi_goreng;
$_SESSION["mee_goreng"] = $mee_goreng;
$_SESSION["roti_canai"] = $roti_canai;
$_SESSION["nasi_lemak"] = $nasi_lemak;
$_SESSION["ayam_penyet"] = $ayam_penyet;
$_SESSION["kuey_teow"] = $kuey_teow;
$_SESSION["teh_tarik"] = $teh_tarik;
$_SESSION["kopi"] = $kopi;
$_SESSION["bandung_soda"] = $bandung_soda;

$nasi_goreng_price = 5.00;
$mee_goreng_price = 6.00;
$roti_canai_price = 2.00;
$nasi_lemak_price = 2.50;
$ayam_penyet_price = 7.00;
$kuey_teow_price = 4.00;
$teh_tarik_price = 2.00;
$kopi_price = 2.00;
$bandung_soda_price = 3.00;

$nasi_goreng_total = $nasi_goreng * $nasi_goreng_price;
$mee_goreng_total = $mee_goreng * $mee_goreng_price;
$roti_canai_total = $roti_canai * $roti_canai_price;
$nasi_lemak_total = $nasi_lemak * $nasi_lemak_price;
$ayam_penyet_total = $ayam_penyet * $ayam_penyet_price;
$kuey_teow_total = $kuey_teow * $kuey_teow_price;
$teh_tarik_total = $teh_tarik * $teh_tarik_price;
$kopi_total = $kopi * $kopi_price;
$bandung_soda_total = $bandung_soda * $bandung_soda_price;


$total_price = $nasi_goreng_total + $mee_goreng_total + $roti_canai_total + $nasi_lemak_total + $ayam_penyet_total + $kuey_teow_total
    + $teh_tarik_total + $kopi_total + $bandung_soda_total;

$_SESSION["total_price"] = $total_price;

// SQL query to get the maximum order ID
$get_order_id = "SELECT MAX(order_id) AS latest_order_id FROM menu";

// Execute the SQL query
$result = mysqli_query($conn, $get_order_id);

if ($result) {
    // Check if there are rows returned by the query
    if (mysqli_num_rows($result) > 0) {
        // Fetch the row containing the latest order ID
        $row = mysqli_fetch_assoc($result);

        // Get the latest order ID
        $latest_order_id = $row['latest_order_id'] + 1;
        $_SESSION["order_id"] = $latest_order_id;

        // Output the latest order ID
        echo "Latest Order ID: " . $latest_order_id;
    } else {
        // No orders found in the menu table
        echo "No orders found in the menu table.";
    }
} else {
    // Error executing the query
    echo "Error: " . mysqli_error($conn);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cart</title>

</head>

<body>
    <div class="container">
        <h1>EsWarung</h1>

    </div>

    <table>
        <tr>
            <td width=400></td>
            <td width=400 style="text-align: center">
                <h2>Order Summary</h2>
            </td>
            <td width=400 style="text-align: right">
                <h2>Order Number: <?php echo $latest_order_id;
                                    ?></h2>
            </td>
        </tr>
    </table>


    <form action="payment.php" method="post">
        <fieldset>
            <table border="0" style="margin-left: auto; margin-right: auto" style="text-align: center">
                <tr style="width: 400%" align="center">
                    <td style="width: 700px">Menu</td>
                    <td style="width: 600px">Quantity</td>
                    <td style="width: 300px">Total</td>
                </tr>

                <tr align="center">
                    <td><?php echo "Nasi Goreng" ?></td>
                    <td><?php echo $_SESSION["nasi_goreng"] ?></td>
                    <td>RM <?php echo $nasi_goreng_total ?></td>
                </tr>

                <tr align="center">
                    <td><?php echo "Mee Goreng" ?></td>
                    <td><?php echo $_SESSION["mee_goreng"] ?>
                    </td>
                    <td>RM <?php echo $mee_goreng_total ?></td>

                </tr>
                <tr align="center">
                    <td><?php echo "Roti Canai" ?></td>
                    <td><?php echo $_SESSION["roti_canai"] ?>
                    </td>
                    <td>RM <?php echo $roti_canai_total ?></td>
                </tr>
                <tr align="center">
                    <td><?php echo "Nasi Lemak" ?></td>
                    <td><?php echo $_SESSION["nasi_lemak"] ?>
                    </td>
                    <td>RM <?php echo $nasi_lemak_total ?></td>
                </tr>
                <tr align="center">
                    <td><?php echo "Ayam Penyet" ?></td>
                    <td><?php echo $_SESSION["ayam_penyet"] ?>
                    <td> RM <?php echo $ayam_penyet_total ?></td>
                </tr>
                <tr align="center">
                    <td><?php echo "Kuey Teow" ?></td>
                    <td><?php echo $_SESSION["kuey_teow"] ?>
                    </td>
                    <td>RM <?php echo $kuey_teow_total ?></td>
                </tr>
                <tr align="center">
                    <td><?php echo "Teh Tarik" ?></td>
                    <td><?php echo $_SESSION["teh_tarik"] ?>
                    </td>
                    <td>RM <?php echo $teh_tarik_total ?></td>
                </tr>
                <tr align="center">
                    <td><?php echo "Kopi" ?></td>
                    <td><?php echo $_SESSION["kopi"] ?>
                    </td>
                    <td>RM <?php echo $kopi_total ?></td>
                </tr>
                <tr align="center">
                    <td><?php echo "Bandung Soda" ?></td>
                    <td><?php echo $_SESSION["bandung_soda"] ?>
                    </td>
                    <td>RM <?php echo $bandung_soda_total ?></td>

                </tr>
                <tr align="center">
                    <td>Total</td>
                    <td></td>
                    <td>RM <?php echo $total_price ?></td>

                </tr>

            </table>

        </fieldset>

        <br />



        <div class="button-container" style="text-align: center">
            <a href="menu.php">

                <input type="button" value="Back To Menu" style="
          background-color: #176bcd;
          color: white;
          height: 33px;
          width: 120px;
          border-radius: 13px;
        " />
            </a>

            <input type="button" value="Delete" onclick="resetFormValues()" style="
          background-color: #176bcd;
          color: white;
          height: 33px;
          width: 80px;
          border-radius: 13px;
        " />
            <input type="submit" value="Submit Order" style="
          background-color: #176bcd;
          color: white;
          height: 33px;
          width: 100px;
          border-radius: 13px;
        " />

        </div>
    </form>

    <script>
        function resetFormValues() {
            document.getElementsByName("nasi_goreng")[0].value = 0;
            document.getElementsByName("mee_goreng")[0].value = 0;
            document.getElementsByName("roti_canai")[0].value = 0;
            document.getElementsByName("nasi_lemak")[0].value = 0;
            document.getElementsByName("ayam_penyet")[0].value = 0;
            document.getElementsByName("kuey_teow")[0].value = 0;
            document.getElementsByName("teh_tarik")[0].value = 0;
            document.getElementsByName("kopi")[0].value = 0;
            document.getElementsByName("bandung_soda")[0].value = 0;
        }
    </script>
</body>

</html>



<?php

mysqli_close($conn);
?>
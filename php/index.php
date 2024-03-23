<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login Page</title>

</head>

<body style="text-align:center ;font-family:monospace;background-color:#F1F5F8">
  <h1> EsWarung </h1>
  <h2> Login Page </h2>
  <form action="menu.html">
    <table border="0" align=center>

      <tr>
        <td> <b> Name : </b> </td>
        <td> <input type="text" name="username" size="50" id="username" style="border-radius: 5px ;height:30px" required> </td>

      </tr>
      <tr>
        <td>‎</td>
      </tr>
      <tr>
        <td> <b> Password : </b> </td>
        <td> <input type="password" name="password" size="50" style="border-radius: 5px ;height:30px" required> </p>
        </td>
      </tr>
    </table>
    <br>
    <table align=center>
      <td><input type="submit" value="Login" style="background-color:#176BCD; color:white ;height:33px;width:90px">

      </td>
      <td><a href="register.php">
          <input type="button" value="Register" style="background-color:#176BCD; color:white ;height:33px;width:90px"></a></td>
      <td><a href="admin_page.php"><input type="button" value="Admin Page" style="background-color:#176BCD; color:white ;height:33px;width:90px"></a></td>
    </table>
  </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body style="font-family: monospace;">

    <form action="admin_page.html">

        <h1 style="text-align: center;"> EsWarung </h1>
        <h2 style="text-align: center;"> Customer Management Page </h2>

        <table border="0" align=center>

            <tr>
                <td>
                    <p><b> Name : </b>
                </td>
                <td> <input type="text" name="username" size="50" style="border-radius: 5px ;height:30px" required> </p>
                </td>

            </tr>

            <tr>
                <td>
                    <p><b> Email : </b>
                </td>
                <td> <input type="email" name="Email" size="50" style="border-radius: 5px ;height:30px" required> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p><b> Password : </b>
                </td>
                <td> <input type="password" name="password" size="50" style="border-radius: 5px ;height:30px" required> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p><b> Date of birth : </b>
                </td>
                <td> <input type="date" name="dob" style="border-radius: 5px ;height:30px" required> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p><b> Gender : </b>
                </td>
                <td> <input type="radio" name="sex" value="male" required> Male </td>

            </tr>

            <tr>
                <td></td>
                <td> <input type="radio" name="sex" value="female" required> Female </td>
            </tr>


            <tr>
                <td>
                    <p><b> Country : </b>
                </td>
                <td>
                    <select name=state required>
                        <option value="state">West Malaysia</option>
                        <option value="state">East Malaysia</option>

                    </select>
                </td>
            </tr>



            <tr>
                <td></td>
                <td> <input type="checkbox" name="a" value="checkbox" required> I have confirm that all the information above is true </td>
            </tr>
            <tr>
                <td><b>Comments:</b></td>
                <td><textarea rows="3" cols="50">

                </textarea>
                </td>
            </tr>
        </table>
        <br>
        <table align=center>
            <td>
                <input type="submit" style="background-color:#176BCD; color:white ;height:33px;width:80px" value="Add">
            </td>
            <td><button style="background-color:#176BCD; color:white ;height:33px;width:80px"> Search </button></td>
            <td><button style="background-color:#176BCD; color:white ;height:33px;width:80px"> Delete </button></td>
            <td><a href="index.php"><input type="button" value="Return" style="background-color:#176BCD; color:white ;height:33px;width:80px"></a></td>

        </table>


    </form>



</body>

</html>
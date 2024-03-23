<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        * {
            text-align: center;
            font-family: monospace;
            background-color: #F1F5F8;
        }
    </style>
</head>

<body>
    <h1 style="text-align: center;"> EsWarung </h1>
    <h2 style="text-align: center;"> Register Page </h2>
    <form action="register.php">
        <table border="0" align=center>

            <tr>
                <td>
                    <p><b> Name : </b>
                </td>
                <td> <input type="text" name="a" size="50" style="border-radius: 5px ;height:30px" required> </p>
                </td>

            </tr>

            <tr>
                <td>
                    <p><b> Email : </b>
                </td>
                <td> <input type="email" name="b" size="50" style="border-radius: 5px ;height:30px" required> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p><b> Password : </b>
                </td>
                <td> <input type="password" name="b" size="50" style="border-radius: 5px ;height:30px" required> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p><b> Date of birth : </b>
                </td>
                <td> <input type="date" name="b" size="50" style="border-radius: 5px ;height:30px" required> </p>
                </td>
            </tr>

            <tr>
                <td>
                    <p><b> Gender : </b>
                </td>
                <td> <input type="radio" name="sex" value="male" style="border-radius: 5px"> Male </td>

            </tr>

            <tr>
                <td></td>
                <td> <input type="radio" name="sex" value="female" style="border-radius: 5px"> Female </td>
            </tr>


            <tr>
                <td>
                    <p><b> Country : </b>
                </td>
                <td>
                    <select name=state>
                        <option value="state">West Malaysia</option>
                        <option value="state">East Malaysia</option>

                    </select>
                </td>
            </tr>


            <tr>
                <td></td>
                <td> <input type="checkbox" name="a" value="Member"> I have confirm that all the information above is true </td>
            </tr>

        </table>
        <br>
        <table align=center>
            <td>
                <input type="submit" value="Sign Up" style="background-color:#176BCD; color:white ;height:33px;width:100px">
            </td>
        </table>
    </form>



</body>

</html>

<?php
//sini tempat php fetch data from html and insert to sql


//kalau dah masuk kat sql, baru boleh redirect into index.html
?>
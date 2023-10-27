<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        $q = intval($_GET['q']);
        $con = mysqli_connect('localhost', 'root', '');
        if(!$con){
            die('Holboltiin aldaa: ' .mysqli_error($con));
        }

        mysqli_select_db($con, "cs3a");
        $sql = "SELECT * FROM users WHERE id = '".$q."'";
        $result = mysqli_query($con,$sql);

        echo "<table>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Phone</th>
                </tr>";
            while($row=mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['age'] . "</td>";
                    echo "<td>" . $row['city'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            mysqli_close($con);
    ?>
</body>
</html>
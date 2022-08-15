<?php require './config.php';

    $query="SELECT * from user";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <div class="img"></div>
    <div class="registration">
        <h2>List of Appointments</h2>
        <table align="center" border="1px" style="width:1000px; line-height:30px;" >
            <tr>
                <th>Client Name</th>
                <th>Phone</th>
                <th>Car Registration Number</th>
                <th>Appointment Date</th>
                <th>Mechanic Name</th>
                <th>Operation</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_assoc($result)){
             echo"
                <tr>
                    <td>".$rows['username']."</td>
                    <td>".$rows['phone']."</td>
                    <td>".$rows['licensenumber']."</td>
                    <td>".$rows['date']."</td>
                    <td>".$rows['mechanic']."</td>
                    <td><a href='update.php?rn=$rows[id]'><button>Edit</button></td></a>
                </tr>";
             
            }
            ?>
            
        </table>
    </div>
</body>
</html>


<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "workshop";
    $date = $_POST['date'];
    $mechanic = $_POST['mechanic'];

    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);


    session_start();

    $id = $_SESSION["id"];
    $UPDATE = "UPDATE user SET date=?, mechanic=? where id=?";
    $stmt = $conn ->prepare($UPDATE);
    $stmt -> bind_param("ssi",$date,$mechanic,$id);
    $stmt -> execute();
    echo "Record Updated successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="admin.php"><button>Go Back</button></a>
</body>
</html>
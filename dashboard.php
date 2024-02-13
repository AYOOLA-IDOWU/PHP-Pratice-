<?php
require 'database_con.php';
session_start();
$pupils_id=$_SESSION['pupilsid'];
$query="SELECT * FROM pupils_table WHERE pupils_id = $pupils_id";
$con=$database_con->query($query);
$user=$con->fetch_assoc();
?>











<!-- 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 -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>Welcome, <?php
echo $user['first_name'];
?>

<form action="process.php" method="post" enctype="multipart/form-data">
    <input type="file" name="" id="">
</form>
</div>    
</body>
</html>
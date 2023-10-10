<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILES</title>
</head>
<body>
<center>

<?php
$user = 'root';
$host = 'localhost';
$pass = '123456789';
$database = 'ksa';
$connect = mysqli_connect($host,$user,$pass,$database);

$q = 'select * from names';
$r = mysqli_query($connect,$q);
$row = mysqli_fetch_all($r);
print_r($row);


?>

</center>   

</body>
</html>

<?php
// require("05login.php");
session_start();
$p = $_SESSION['username'];
if(!isset($_SESSION['username'])){
    header("location: 05login.php");
    echo $p;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HEllo</h1>
</body>
</html>
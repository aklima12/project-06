<?php
require_once 'admin_dbcon.php';
session_start();
if(isset($_SESSION['user_login'])){
    header('Location:login_index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCTISOFTWARE DEVELOPMENT COMPANY LIMITED</title>
</head>
<body>
    <ul> 
        <li><a href="">Dashboard</a></li>
        <li><a href="">Student list</a></li>
        <li><a href="">Admission</a></li>
        <li><a href="">Setting</a></li>
        <li><a href="logout.php">Logout</a></li>
       
    </ul>
</body>
</html>
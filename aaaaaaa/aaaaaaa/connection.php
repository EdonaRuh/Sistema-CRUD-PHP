<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "projeto";
$charset = "UTF-8";

//$link = mysqli_connect($hostname, $username, $password, $database) or die(mysqli_connect_error());
//$db = mysqli_select_db($database, $link);
//$chars = mysqli_set_charset($charset, $link);

$connect = new mysqli($hostname,$username,$password,$database);
if (mysqli_connect_error()) trigger_error(mysqli_connect_error());
<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="everland";
$link = mysqli_connect($hostname, $username, $password);
mysqli_set_charset($link,"utf8");
mysqli_select_db($link, $dbname);
?>
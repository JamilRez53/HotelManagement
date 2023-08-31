<?php
$host = 'localhost:3307';
$dbUsername = 'root';
$dbPassword = '';
$dbname = 'h';
$link = mysqli_connect($host,$dbUsername,$dbPassword) or die ("could not connect to MySQL");
@mysqli_select_db($link,$dbname) or die ("No database");

?>

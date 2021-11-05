<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "nicolahara";
$koneksi = mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);
if ($pilihdatabase) echo "y";
else echo "t";
?>
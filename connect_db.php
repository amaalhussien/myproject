<?php
$hostname="localhost";
$username="id9106759_amaalhussien";
$password="1996$5@a";
$dbname="id9106759_websitme";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn)
{
    die("connection failed:".mysqli_connect_errno());
}
mysqli_set_charset($conn,"utf8");

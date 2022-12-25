<?php                                   
$conn=mysqli_connect("localhost","root","","patelspin");
//echo $conn;exit;
if(mysqli_connect_errno())
{
    echo "failed to connect to my sqli" .mysqli_connect_error ();
    exit;
}
mysqli_select_db($conn,"patelspin");
session_start();
?>
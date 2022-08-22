<?php
$servername="localhost";
$username="root";
$password="";
$dbname="eyebank";
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
//echo $conn;//set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{  echo"connection failed:".$e->getMessage();
    exit;
}
?>
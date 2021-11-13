<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="project_management";

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
  die("Database connection failed!");
}
 ?>

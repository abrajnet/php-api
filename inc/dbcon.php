<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "phptutorial";


$conn =mysqli_connect($host,$username,$password,$dbname);

if(!$conn){

    die("Coniction Faible" . mysqli_connect_errno());

}

?>
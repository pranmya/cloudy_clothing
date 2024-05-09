<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test65";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
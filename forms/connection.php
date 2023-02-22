<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ultra_affiliates_db";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}


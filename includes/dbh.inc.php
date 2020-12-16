<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ionuteboss";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn)
{

    die("A murit ba!!: " . mysqli_connect_error());

}

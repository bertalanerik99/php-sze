<?php
$servername = "localhost";
// $username = "pultappdb_u";
// $password = "ht2@M65p";
// $databasename = "pultappdb";
$username = "root";
$password = "";
$databasename = "feedbackapp";
$conn = mysqli_connect($servername, $username, $password, $databasename);
if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}

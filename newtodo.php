<?php

$LIST = $_POST['list'];

include "config.php";
mysqli_query($conn, "INSERT INTO `todotable`(`list`) VALUES ('$LIST')");

header("location:index.php");
<?php

include "config.php";
$list = $_POST['list'];
$ID = $_POST['id'];
mysqli_query($conn, "UPDATE `todotable` SET `list`=`$list` WHERE id= $ID");
header("location:index.php");
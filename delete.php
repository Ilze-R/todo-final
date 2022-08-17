<?php

include "config.php";

$id = $_GET['ID'];

mysqli_query($conn, "DELETE FROM todotable WHERE id = $id");

header("location:index.php");

?>
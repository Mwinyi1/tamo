<?php
include "../db.php";
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM programs WHERE id=$id");
header("Location: programs.php");

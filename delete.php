<?php
$id    = $_GET['id'];
require_once("config.php");
$sql = "DELETE FROM employee WHERE id=".$id;
$query = mysqli_query($conn,$sql);
header("location:display-records.php");
?>
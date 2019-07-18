<?php
$id=$_GET["id"];
$sql="DELETE FROM employee WHERE id=".$id;
$query=mysqli_query($conn,$sql);
header("location:myfetch.php");

?>



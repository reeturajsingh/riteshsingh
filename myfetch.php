<?php
require_once("myconfig.php");
?>



<!DOCTYPE html>
<html>
<head>
<title> FETCH RECORD</title>
</head>
<body>
<table border="1">
<tr>
<th> Name  </th>
<th> Email </th>
<th> Mobile </th>
<th> Address </th>
<th> Password </th>
<th> Salary </th>
<th> Action </th>
</tr>
<?php 
$sql="SELECT * FROM employee";
$query =  mysqli_query($conn,$sql);


//$result2 = mysqli_fetch_object(); 
while($result1 = mysqli_fetch_assoc($query)){ ?>
<tr>
<td><?php echo $result1['name'];?></td>
<td> <?php echo $result1['email'];?></td>
<td><?php echo $result1['phone'];?> </td>
<td><?php echo $result1['address'];?> </td>
<td> <?php echo $result1['password'];?></td>
<td><?php echo $result1['salary'];?> </td>
<td><a href="myupdate.php?id=<?php echo $result1['id']; ?>">Edit</a>||<a href="delete.php?id=<?php echo $result1['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>

</body>
</html>
<a href="https://www.google.com/"> google </a>
<?php
require_once("config.php");
$sql   ="SELECT * FROM employee";
$query =  mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html>
<head>
<title>Display Records</title>
</head>
<body>
<table border="1">
<tr>
<th>ID:</th>
<th>Name:</th>
<th>Email:</th>
<th>Phone:</th>
<th>Address:</th>
<th>Salary:</th>
<th>Password:</th>
<th>Country:</th>
<th>Gender:</th>
<th>Image:</th>
<th>Language:</th>
<th>Added At:</th>
<th>Action:</th>
</tr>
<?php
//echo count($query);
while($row = mysqli_fetch_assoc($query)){ ?>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['phone'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['salary'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['country'];?></td>
<td><?php echo $row['gender'];?></td>
<td><img style="width:100px;height:80px;" src="<?php echo "images/".$row['image'];?>"/></td>
<td><?php echo $row['language'];?></td>
<td><?php echo $row['created_date'];?></td>
<td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>||<a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
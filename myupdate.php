<?php
$id    = $_GET['id'];
require_once("myconigf.php");
if(isset($_POST['submit']) && $_POST['submit'] == "UPDATE"){
	$name     = $_POST['name'];
	$email    = $_POST['email'];
	$mobile   = $_POST['mobile'];
	$address  = $_POST['address'];
	$password = $_POST['password'];
	$salary   = $_POST['salary'];
	
	$sql="UPDATE employee set name='".$name."',email='".$email."',phone='".$mobile."',address='".$address."',password='".$password."', salary='".$salary."' WHERE id=".$id;
	$query=mysqli_query($conn,$sql);

}
$sql="SELECT * FROM employee WHERE id=".$id;
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title> USER REGISTRATION</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td> Your Name : </td>
<td>
<input required type="text" name="name" placeholder="enter name" value="<?php echo $row['name'];?>">
</td>
</tr>
<tr>
<td>Your Email: </td>
<td>
<input required type="email" name="email" placeholder="enter email" value="<?php echo $row['email'];?>">
</td>
</tr>
<tr>
<td>Mobile No : </td>
<td>
<input required type="text" name="mobile" placeholder="enter mobile" pattern="{0-9}[10]" value="<?php echo $row['phone'];?>">
</td>
</tr>
<tr>
<td>Address :</td>
<td>
<textarea required name="address"> <?php echo $row['address'];?></textarea>
</td>
</tr>
<tr>
<td>Salary :</td>
<td>
<input type="text" name="salary" placeholder="enter your salary" value="<?php echo $row['salary'];?>">
</td>
</tr>
<tr>
<td>Password :</td>
<td>
<input type="password" name="password" placeholder="enter your password" value="<?php echo $row['password'];?>">
</td>
</tr>

<tr>
<td> choose the country :</td>
<td>
<select name="country"> 
<option value=""> select your contry </option>
<option value="india"> india </option>
<option value="pakistan"> pakistan </option>
<option value="america"> america </option>
   </select>
</td>
</tr>
<tr>
<td>Gender :</td>
<td> 
 male<input type="radio" name="gender" value="male">female<input type="radio" name="gender" value="female"> 
</td>
</tr>
<tr>
<td>upload images :</td>
<td>
<input type="file" name="image">
</td>

</tr>
<tr>
<td>Language :</td>
<td> 
 hindi<input type="checkbox" name="Language" value="hindi">english<input type="checkbox" name="Language" value="english">Panjabi<input type="checkbox" name="Language" value="Panjabi"> 
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="UPDATE"></td>
</tr>

</table>

</form>

</body>

</html>

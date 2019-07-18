<?php
require_once("config.php");
if(isset($_POST['submit']) && $_POST['submit'] ==  "Registration"){
	if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));      
      $extensions= array("jpeg","jpg","png");      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
		 
		 	 $name     =  $_POST['name'];
			 $email    =  $_POST['email'];
			 $mobile   =  $_POST['mobile'];
			 $address  =  $_POST['address'];
			 $salary   =  $_POST['salary'];
			 $password =  $_POST['password'];	 
			 $country  =  $_POST['country']; 
			 $gender   =  $_POST['gender']; 
			 $image    =  $_FILES['image']['name']; 
			 $language =  $_POST['language']; 
			 
			 $sql = "INSERT INTO employee (name,email,phone,address,salary,password,country,gender,image,language)values('".$name."','".$email."','".$mobile."','".$address."','".$salary."','".$password."','".$country."','".$gender."','".$image."','".$language."')";
			 $query = mysqli_query($conn,$sql);
		 
      }else{
         print_r($errors);
      }
   }
   

	 
}
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
<input required type="text" name="name" placeholder="enter name">
</td>
</tr>
<tr>
<td>Your Email: </td>
<td>
<input required type="email" name="email" placeholder="enter email">
</td>
</tr>
<tr>
<td>Mobile No : </td>
<td>
<input required type="text" name="mobile" placeholder="enter mobile" pattern="{0-9}[10]">
</td>
</tr>
<tr>
<td>Address :</td>
<td>
<textarea required name="address"></textarea>
</td>
</tr>
<tr>
<td>Salary :</td>
<td>
<input type="text" name="salary" placeholder="enter your salary">
</td>
</tr>
<tr>
<td>Password :</td>
<td>
<input type="password" name="password" placeholder="enter your password">
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
 hindi<input type="checkbox" name="language" value="hindi">english<input type="checkbox" name="language" value="english">Panjabi<input type="checkbox" name="language" value="Panjabi"> 
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="submit" value="Registration"></td>
</tr>

</table>

</form>

</body>

</html>

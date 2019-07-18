<?php
$servername   = "localhost";
$username     = "root";
$password     = "";
$dabase       = "ritu_data";

//create connection
 $conn=mysqli_connect($servername,$username,$password,$dabase);
 //cheq connection
 if(!$conn){
	 die("connection faild:" .mysqli_connect_error());
 }else{
	 //echo"connected succusefully";
 }
 
?> 
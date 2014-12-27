<?php
 $name=$_FILES['file']['name'];
 
 $tmp_name=$_FILES['file']['tmp_name'];
 $location='image/';
 $link= mysqli_connect("localhost",
						"root",
						"",
						"information");
$store
	
 if (move_uploaded_file($tmp_name,$location.$name)) {
	 echo 'Photo update successfuly';
	 } else {
		echo "choose a file";
	}

header('location:mysql.php')
?>
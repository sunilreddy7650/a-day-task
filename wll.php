<?php
 include("conf.php");

 
 
	 $uname=$_POST['uname'];
	 $pwd= $_POST['pwd'];
	 echo "<h3>username:</h3><h1>$uname</h1><br>";

	 echo "<h3>password:</h3> <h1>$pwd</h1><br/>";
	 
	 if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error); 
	 }
 
 $res= mysqli_query($conn," insert into login (uname,pass) values('$uname','$pwd')");
 
 if($res)
 {
	 echo " <h1 color:red>great work!!! <br/>";
 }
 else
 {
	 echo  "sorry try aonther code";
	
 }
 
?>
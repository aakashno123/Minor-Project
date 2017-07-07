<!DOCTYPE html>
<?php
session_start();


?>
<html>
<head>
<title>Login</title>
</head>
<body>
<h2 id="header">Login</h2>
<?php 
$Name=$_REQUEST['name'];
$Roll=$_REQUEST['roll'];$Roll=$_REQUEST['roll'];

$Password=$_REQUEST['psw'];

$servername = "localhost";
$username = "root";
$pword = "";

$con = mysql_connect($servername, $username, $pword);

if (!$con) {
    die("Connection failed: " . mysql_error());
} 
echo "<p>Connected successfully</p>";

mysql_select_db("Student",$con);

$sql= 'SELECT Name,Roll_No,Semester,Branch,Email_ID,Password
      FROM Register';

	  
$retriv=mysql_query($sql,$con);
	  
if(!$retriv){

	die('<p>Could not get data: ' . mysql_error().'</p>');
}

$flag=true;
 while(($row = mysql_fetch_array($retriv, MYSQL_ASSOC)) && $flag) {
     /* echo "Name:{$row['Name']}  <br> ".
         "Roll No: {$row['Roll_No']} <br> ".
         "Semester: {$row['Semester']} <br> ".
         "Password: {$row['Password']} <br> ".
         "--------------------------------<br>";
     */
		if($Name==$row['Name'] && $Roll==$row['Roll_No'] && $Password==$row['Password']){
			$flag=false;
			$_SESSION['sha1name']= sha1($Name);
			$_SESSION['name']=$row['Name'];
			$_SESSION['roll']=$row['Roll_No'];
			$_SESSION['semester']=$row['Semester'];
			$_SESSION['branch']=$row['Branch'];
			$_SESSION['email']=$row['Email_ID'];
			echo "<p>match found</p>";
			header('Location: stu.php');
			exit;
	}
	
   } 
   echo "Fetched data successfully\n";
	
	if($flag){
		
		header('Location: login.html');
		exit;
	}
	

?>


</body>
</html>
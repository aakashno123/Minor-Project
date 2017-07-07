<html>
<head><title>Connecting to MySQL.</title>
</head>
<body>

<?php 

$NAME=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$sem=$_REQUEST['semester'];
$password=$_REQUEST['psw'];
$BRANCH=$_REQUEST['branch'];
$EMAIL=$_REQUEST['email'];
$servername = "localhost";
$username = "root";
$pword = "";

// Create connection
$con = mysql_connect($servername, $username, $pword);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
} 
echo "<p>Connected successfully</p>";

/*
if(mysql_query("CREATE DATABASE Student",$con)){
	echo "DATABASE CREATED!";
}
else
	echo "error:".mysql_error();



mysql_select_db("Student",$con);

$sqlCreateTable="CREATE TABLE Register(
Name varchar(30) NOT NUll,
Roll_No varchar(10) NOT NUll,
Semester int NOT NUll,
Branch varchar(50) NOT NULL,
Email_ID varchar(50) NOT NULL,
Password varchar(25) NOT NUll,
PRIMARY KEY(Roll_No)	
)";

mysql_query($sqlCreateTable,$con);
*/

$sqlInsertInToTable="INSERT INTO Register".
"(Name,Roll_No,Semester,Branch,Email_ID,Password)"."VALUES".
"('$NAME','$roll','$sem','$BRANCH','$EMAIL','$password')";


/*
"INSERT INTO Register".
"(Name,Roll_No,Semester,Branch,Email_ID,Password)"."VALUES".
"('$NAME','$roll','$sem','$BRANCH','$EMAIL','$password')";
*/
mysql_select_db("Student",$con);

if(mysql_query($sqlInsertInToTable,$con)){
	header('Location:index.html');





}else{
	echo "<p>Unable to insert:".mysql_error()."</p>";
}







mysql_close($con);


?>
</body>
</html>
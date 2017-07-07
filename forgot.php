<?php 
$Roll=$_REQUEST['roll'];
$Mail=$_REQUEST['email'];
$servername = "localhost";
$username = "root";
$pword = "";

$con = mysql_connect($servername, $username, $pword);

if (!$con) {
    die("Connection failed: " . mysql_error());
} 


mysql_select_db("Student",$con);

$sql= 'SELECT Name,Roll_No,Semester,Branch,Email_ID,Password
      FROM Register';


$retriv=mysql_query($sql,$con);
	  
if(!$retriv){

	die('<p>Could not get data: ' . mysql_error().'</p>');
}

$flag=true;

while(($row = mysql_fetch_array($retriv, MYSQL_ASSOC)) && $flag) {
     
		if( $Roll==$row['Roll_No'] && $Mail==$row['Email_ID']){
			$flag=false;
			$pass=$row['Name']." your password is =>".$row['Password'];
			$pass=wordwrap($pass,70);
			$header="From:answerviewingsystem@gmail.com \r\n \r\n";
			
			 $retval =mail($Mail,"Password for Answer Sheet Viewer",$pass,$header);
    if(isset($retval))
    {
		echo '<script>alert("Password sent to your email address :(")</script>';	
       header('Location:login.html');
    }
    else
    {
        echo '<script>alert("Password could not be sent to your email address :(")</script>';
		header('Location:index.html');
    }
			exit;
	}
	
   }	  

?>
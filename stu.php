<html>
<head>
<?php session_start();
$code="notset";
$sha="not set";
$sha=$_SESSION['sha1name'];
$code=sha1($_SESSION['name']);
if($sha !=$code){
	header('Location: login.html');
	exit;
}	
 ?>
<title> <?php echo $_SESSION['name']; ?> </title>
<script language="JavaScript" type="text/javascript">
function confirmLogout(){
var agree = confirm("Are you sure you wish to logout?");

if(agree){
return true;

}else{

return false;

}
}
</script>
<style>
body{
	background-image:url('images/e.jpg');
}

ul {
	position:fixed;
	top:0;
	width:100%;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #4CAF50;
	font-size: 22px;
	-webkit-transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-ms-transition-duration: 0.4s;
}

.active {
    background-color: #4CAF50;
	font-size: 22px;
	-webkit-transition-duration: 0.4s;
	-moz-transition-duration: 0.4s;
	-ms-transition-duration: 0.4s;
}

#left{
	padding-top:5%;
width:30%;
height:100%;

    background-color: rgba(101, 183, 237,0.4);
}

#right{
	padding-top:2%;
width:70%;
height:100%;

}

#left, #right{

float:left;

}
.img-circle{
	border-radius:50%;
	width:33%;
	padding-left:34%;
	padding-right:33%;
}
.img-circle:hover
{
	
	-moz-transform: scale(1.4);
	-moz-transition-duration: 0.5s;
	-webkit-transition-duration: 0.5s;
	-webkit-transform: scale(1.4);
	
	-ms-transform: scale(1.4);
	-ms-transition-duration: 0.5s;
	
}

#INFO{
padding-left:15%;
padding-top:5%;
padding-bottom:5%;
padding-right:15%;
text-align: left;
font-size: 22px;
color:rgb(2, 7, 68);
}
#INFO:hover {
   
	background-color:rgba(0,0,0,0.1);
	
	
	-webkit-transition-duration: 0.6s;
	-moz-transition-duration: 0.6s;
	-ms-transition-duration: 0.6s;
}


.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}
.button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

#button{
	padding-top:3%;
	padding-left:50%;
}

#sub{
	color:white;
	background-color:rgba(0, 255, 33,0.2);
	padding:20px;
}
.button1{
	color:black;
	background-color: rgba(101, 183, 237,0.4);
	width:325px;
	padding:2%;
	font-size:16px;
	
}

.button1:hover{
	background-color: rgba(101, 183, 237,0.9);
	 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	 font-size:20px;
}

#tab{
	padding-top:2%;
	padding-left:35%;
	
}



</style>

</head>
<body>
<div id="HEADER">
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="http://csvtu.ac.in/ew/">CSVTU</a></li>
  <li><a href="http://www.gecraipur.ac.in/">GEC Raipur</a></li>
  <li style="float:right"><a href="logout.php" onClick="return confirmLogout()">Logout</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
</div>
<div id="left">
<img class="img-circle" src="<?php echo 'Base/'.$_SESSION['roll'].'/Profile/pic.jpg' ?>"/>
 

 <br>
<div id="button"><button class="button" align="center" onclick="location.href='upload.php';" ><label>Upload Image</label></button></div>
<div id="INFO">
 <label>Name:<?php echo $_SESSION['name'] ?></label><br>
 <label>Roll No.: <?php  echo $_SESSION['roll'] ;?></label><br>
 <label>Branch: <?php  echo $_SESSION['branch'] ;?></label><br>
 <label>Semester: <?php  echo $_SESSION['semester'] ;?></label><br>
 <label>Email Id.: <?php  echo $_SESSION['email'] ;?></label><br>
 
</div>
<div id="button"><button class="button" align="center" onclick="location.href='change.html';" ><label>Edit Info.</label></button></div>
</div>
<div id="right">
<div id="sub"><h1 align="center">Subjects</h1></div>

<div id="tab">

<a  href="stu.php?link=1"> <button class="button1"  >Mobile Computing & Application</button></a><br>
<a  href="stu.php?link=2"> <button class="button1" >Parallel Processor and Computing</button></a><br>
<a  href="stu.php?link=3"> <button class="button1" >Network Programming</button></a><br>
<a  href="stu.php?link=4"> <button class="button1" >Cryptography & Network Security</button></a><br>
<a  href="stu.php?link=5"> <button class="button1" >Operation Research</button></a><br>
<a  href="stu.php?link=6"> <button class="button1" >Minor Project</button></a><br>

</div>
<?php 


  if(isset($_GET['link'])){
switch($_GET['link']){
	case '1':$_SESSION['subfol']="Base/".$_SESSION['roll']."/Subject 1/";
				echo('<script>location.href ="ImageViewer.php";</script>');
			break;
	case '2':$_SESSION['subfol']="Base/".$_SESSION['roll']."/Subject 2/";
			echo('<script>location.href ="ImageViewer.php";</script>');
			break;
	case '3':$_SESSION['subfol']="Base/".$_SESSION['roll']."/Subject 3/";
			echo('<script>location.href ="ImageViewer.php";</script>');
			break;			
	case '4':$_SESSION['subfol']="Base/".$_SESSION['roll']."/Subject 4/";
			echo('<script>location.href ="ImageViewer.php";</script>');
			break;
	case '5':$_SESSION['subfol']="Base/".$_SESSION['roll']."/Subject 5/";
			echo('<script>location.href ="ImageViewer.php";</script>');
			break;
	case '6':$_SESSION['subfol']="Base/".$_SESSION['roll']."/Subject 6/";
			echo('<script>location.href ="ImageViewer.php";</script>');
			break;		
		}
}


?>


</div>
</body>
</html>

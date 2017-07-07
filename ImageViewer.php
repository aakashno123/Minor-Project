
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
session_start();
$code="notset";
$sha="not set";
$sha=$_SESSION['sha1name'];
$code=sha1($_SESSION['name']);
if($sha !=$code){
	header('Location: login.html');
	exit;
}	


?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Image Viewer</title>
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
<style type="text/css">
*{margin:0;padding:0;}
body{
	background-image:url("images/e.jpg");
}
img
{
	width:auto;
	box-shadow:0px 0px 20px #cecece;
	-moz-transform: scale(0.7);
	-moz-transition-duration: 0.5s;	
	-webkit-transition-duration: 0.5s;
	-webkit-transform: scale(0.7);
	
	-ms-transform: scale(0.7);
	-ms-transition-duration: 0.5s;	
}
img:hover
{
	 box-shadow: 20px 20px 20px #dcdcdc;
	-moz-transform: scale(1);
	-moz-transition-duration: 0.5s;
	-webkit-transition-duration: 0.5s;
	-webkit-transform: scale(1);
	
	-ms-transform: scale(1);
	-ms-transition-duration: 0.5s;
	
}


button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

#header
{position:absolute;
top:7%;
	width:100%;
	height:50px;
	background:#00a2d1;
	font-family:"Lucida Handwriting";
	font-family:Verdana, Geneva, sans-serif;
	text-align:center;
	font-size:35px;
	font-weight:bolder;
	color:#f9f9f9;
}
#body
{
	position:absolute;
top:20%;
	margin:0 auto;
	text-align:center;
}


ul {
	
	top:0%;
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
}
h3{
	position:absolute;
top:15%;
width:100%;
}
</style>
</head>
<body>
<div >
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="http://csvtu.ac.in/ew/">CSVTU</a></li>
  <li><a href="http://www.gecraipur.ac.in/">GEC Raipur</a></li>
  <li><a href="stu.php"><?php echo $_SESSION['name']; ?></a></li>
  <li><a href="stu.php">Back</a></li>
  <li style="float:right"><a href="logout.php" onClick="return confirmLogout()">Logout</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
</div>
<div id="header">
	<label>Name:<?php echo $_SESSION['name'] ?>, Roll No.:<?php echo $_SESSION['roll'] ?></label>
</div>
<h3 ><a href="VVV.php"> <button  >ImageSlider</button>   </a> </h3>
<div id="body">
<?php 

$folderPath = $_SESSION['subfol'];//image folder path
$numOfFiles = glob($folderPath . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
$folder = opendir($folderPath);

if($numOfFiles>0){
	
	while(false !== ($file = readdir($folder))){
		$filePath=$folderPath.$file;
		
		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
		if($extension=='jpg' || $extension=='png' || $extension=='gif'){
		
			
?>			
		<a href="<?php echo $filePath; ?>"> <img src="<?php echo $filePath; ?>" height="300" /> </a>

<?php 		
		}
	}
	echo "<p>".sizeof($numOfFiles)."</p>";
}
else
{
	echo "the folder is empty!!";
}
closedir($folder);
?>
</div>

</body>
</html>




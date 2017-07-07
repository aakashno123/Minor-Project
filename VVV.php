<html>
<head>
<?php 
session_start();
$code="notset";
$sha="not set";
$sha=$_SESSION['sha1name'];
$NAME=$_SESSION['name'];
$code=sha1($_SESSION['name']);

if($sha !=$code){
	header('Location: login.html');
	
	exit;
}	


?>
<title>Answer Sheet Viewer</title>
<script src="Js/aakash.js"></script>
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

.table_container{
	position:absolute;
top:10%;
left:80%;
width:20%;
margin-bottom: 100px
}

table{
	 position:fixed;
    top:17%;
    
	
	border:5px solid;
	border-color:#003566;
	font-family: arial, sans-serif;
    border-collapse: collapse;
	width:20%;
	
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}





.slideshow-container, .table_container {
    
    float: left;
    
}

.mySlides {display:none;}


.slideshow-container {
	position:absolute;
top:17%;

 width: 78%;
margin-left: 5px;
}

.numbertext {
  color: black;
  font-size: 34px;
  padding: 20px 20px;
  position: absolute;
  border:2px solid;
  
}
.next{
	right:3%;
}
.prev{
	right:12%;
}

.next, .prev {
	 position:fixed;
    bottom:10%;
     
cursor: pointer; 
transition: 0.6s ease;
padding: 35px;

}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.table_container, .arrow_container{
float:bottom;
}

a{
border:1px outset;
}

#header
{position:absolute;
top:8%;
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

</style>



</head>
<body onload="showSlides(1)">
<div >
<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="http://csvtu.ac.in/ew/">CSVTU</a></li>
  <li><a href="http://www.gecraipur.ac.in/">GEC Raipur</a></li>
  <li><a href="stu.php"><?php echo $_SESSION['name']; ?></a></li>
  <li><a href="ImageViewer.php">Back</a></li>
  <li style="float:right"><a href="logout.php" onClick="return confirmLogout()">Logout</a></li>
  <li style="float:right"><a class="active" href="#about">About</a></li>
</ul>
</div>
<div id="header">
	<label>Name:<?php echo $NAME ?>, Roll No.:<?php echo $_SESSION['roll'] ?></label>
</div>


<div class="slideshow-container">
<?php 
$folderPath =$_SESSION['subfol'];//image folder path
$numOfFiles = glob($folderPath . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
$folder = opendir($folderPath);

if($numOfFiles>0){
	$n=1;
	$tn=sizeof($numOfFiles);
	while(false !== ($file = readdir($folder))){
		$filePath=$folderPath.$file;
		$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
		if($extension=='jpg' || $extension=='png' || $extension=='gif'){
		
			
?>
		<?php print ('<div class="mySlides fade">'); 
			  print( '<div class="numbertext">'.$n.' /'.$tn.' </div>'); $n=$n+1; ?>
		 <img src="<?php echo $filePath; ?>" style="width:100%"/> 
		<?php echo "</div>"; ?>
	
<?php 		
		}
	}
}
else
{
	echo "the folder is empty!!";
}
closedir($folder);
?>



</div>

<div style="text-align:center">

	<?php 
	for($i=1;$i<=$tn;$i++){
	echo '<span class="dot" onclick="currentSlide("'.$i.')"></span>';
	
	}
	?>

</div>

<div class="table_container">

<table align="right">
	<tr>
		<th>Question No.</th>
		<th>Marks</th>
	</tr>
	<?php 
	for($i=1;$i<=10;$i++){
	print ("<tr>");
	print ("<td>".$i."</td>");
	print ('<td><input type="text" name="mark_'.$i.'"></td>');
	print ("</tr>");
	}
	?>
</table>

</div>


<div class="arrow_container" padding-top="20px">
<a class="prev" onclick="plusSlides(-1)"  >&#10094;Previous</a>
<a class="next" onclick="plusSlides(1)"  >Next&#10095;</a>
</div>


</body>
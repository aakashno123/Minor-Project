<html>
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
<body>

<form action="UPL.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
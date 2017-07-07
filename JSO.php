

<html>
<head>
<title>AAKASH </title>
</head>
<body>
<?php

$str=file_get_contents('http://picasaweb.google.com/data/entry/api/user/aakashno123@gmail.com?alt=json');
$Jobject=json_decode($str,true);


echo "<pre>".$Jobject->entry->gphoto\\$thumbnail->\\$t."</pre>";

 
?>


</body>
</html>


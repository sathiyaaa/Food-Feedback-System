<?php

$link=mysqli_connect("localhost","root","root","ff");

if($link==false){
	die("Could not connect");
}

$maincourse1 = mysqli_real_escape_string($link, $_REQUEST['mcn1']);

$maincourse2 = mysqli_real_escape_string($link, $_REQUEST['mcn2']);

$sidecourse1 = mysqli_real_escape_string($link, $_REQUEST['scn1']);

$sidecourse2 = mysqli_real_escape_string($link, $_REQUEST['scn2']);

$sql="INSERT INTO feedback(maincourse1,maincourse2,sidecourse1,sidecourse2) VALUES ('$maincourse1','$maincourse2','$sidecourse1','$sidecourse2')";

if(mysqli_query($link,$sql)){
	echo "Feedback received !! Thanks";
}
else{
	echo "ERROR: ". mysqli_error($link);
}

mysqli_close($link);

?>
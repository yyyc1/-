<?php
	require './common/init.php';
	session_start();
	$title =$_POST['title'];
	$content =$_POST['content'];
	$time =time();
	$username= $_SESSION['username'];
	$query= "INSERT INTO discuss ".
	        "(`title`,`content`,`username`,`time`) ".
	        "VALUES ".
	        "('$title','$content','$username','$time')";
	    echo $query;
		$result=mysqli_query($link,$query);
		if(!$result){
			printf("Error:%s\n",mysqli_error($link));
		}
		else{
			header('Location: ./index.php');
		}
?>

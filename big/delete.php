<?php
	session_start();
	require './common/init.php';
	$current_user= $_SESSION['username'];
	$discuss_id=$_POST["discuss_id"];
	$owner=$_POST['owner'];
	if($current_user=='admin'||$current_user==$owner){
		$query= "delete from discuss where id=$discuss_id";
		echo $query;
		$result=mysqli_query($link,$query);
		if(!$result){
			printf("Error:%s\n",mysqli_error($link));
		}
		else{
			echo "<script> alert('删除成功'); location='index.php'</script>";
		}
	}
	else{
		echo "<script> alert('无此权限，删除失败'); location='index.php'</script>";
	}
	
?>



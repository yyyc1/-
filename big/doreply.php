<?php
	session_start();
	require './common/init.php';
	$content =$_POST['content'];
	$discuss_id=$_POST['discuss_id'];
	$time =time();
	$username= $_SESSION['username'];
	if($username){
		$query= "INSERT INTO reply ".
		        "(`content`,`username`,`discuss_id`,`time`) ".
		        "VALUES ".
		        "('$content','$username','$discuss_id','$time')";
		$result=mysqli_query($link,$query);
		if(!$result){
			printf("Error:%s\n",mysqli_error($link));
		}
		else{
			$sql = "update `discuss` set `reply_count`=`reply_count`+1 where id=$discuss_id";
			$res = mysqli_query($link,$sql);
			if(!$res){
			printf("Error:%s\n",mysqli_error($link));
			}else{
				echo "<script> alert('回复成功'); location='reply.php?discuss_id=$discuss_id'</script>";
			}
			
		}
	}
	else{echo "<script> alert('需要登录'); location='reply.php?discuss_id=$discuss_id'</script>";}




?>
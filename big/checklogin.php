<?php
    require './common/init.php';
    session_start();
	$username=$_POST["user"];
	$password=$_POST["key"];
	$sql = "SELECT `username`,`password` FROM `user`";
	$res = mysqli_query($link,$sql);
	$end = mysqli_fetch_all($res,MYSQLI_ASSOC);
	if (!$res) {
	    printf("Error: %s\n", mysqli_error($link));
	    exit();
	}
	// print_r($end);
	// echo '<hr>';
	$flag=0;
	foreach ($end as $user) {
		if($username==$user['username']){
				$flag=1;
        		if($password==$user['password']){
        				$_SESSION['username'] = "$username";
        				echo "<script> alert('登录成功！正在跳转...') </script>";
						 echo "<a href='index.php'>如果跳转失败请点击跳转~~</a>";
						 header("Refresh:1;url=index.php");
    			}
    			else{
    				  echo "<script>alert('密码错误，请重新输入');location='html/login.html'</script>";
    			}
        }
	}
	if($flag==0){
		echo "<script>alert('用户名不存在，请重新输入');location='html/login.html'</script>";
	}


?>


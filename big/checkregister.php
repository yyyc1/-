<?php
	session_start();
	$username = $_POST['user'];
	$password = $_POST['key'];
	$code = $_POST['code'];
	echo $username;
	echo $password;
	echo $code;
	// echo $_SESSION['code'];
	function is_username($username) { 
		$strlen = strlen($username); 
		if (!preg_match("/^[a-zA-Z0-9_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]+$/",$username)) //两位以上的字母,数字,或者下划线
		{ 
		return false; 
		} elseif (20 < $strlen || $strlen < 2) 
		{ 
		return false; 
		} 
		return true; 
	}
	function isPWD($password,$minLen=6,$maxLen=16){
		$match='/^[\\~!@#$%^&*()-_=+|{}\[\],.?\/:;\'\"\d\w]{'.$minLen.','.$maxLen.'}$/'; //6—16位,由字母、数字组成
		$v = trim($password); 
		if(empty($v)) 
		return false; 
		return preg_match($match,$v); 
	}

	function adduser($username,$password){
		require './common/init.php';
		$sql = 'select username from user';
	    if (!$res = mysqli_query($link, $sql)) {
	        exit("SQL[$sql]执行失败：" . mysqli_error($link));
	    }
	    $data = mysqli_fetch_all($res, MYSQLI_ASSOC);  //在index.html页面会用到此处的结果集
	    mysqli_free_result($res);
	    $flag=1;
	    foreach($data as $v): 
	    	if($username==$v['username']) $flag=0;
	    endforeach;
	    if($flag){
	    	$query= "INSERT INTO user ".
	        "(`username`,`password`) ".
	        "VALUES ".
	        "('$username','$password')";
		    echo $query;
			$result=mysqli_query($link,$query);
			if(!$result){
				printf("Error:%s\n",mysqli_error($link));
			}
			else{
				echo "<script>alert('注册成功');location='html/login.html'</script>";
	    	}
	    }
	    else{
	    	echo "<script>alert('用户名已存在');location='register.php'</script>";
	    }
	  
	}






	if(is_username($username)){
		if(isPWD($password)){
			if($code==$_SESSION['code']){
				adduser($username,$password);
			}
			else{
				echo "<script>alert('验证码错误');location='register.php'</script>";
			}
		}
		else{
			echo "<script>alert('密码需由6—16位,由字母、数字组成');location='register.php'</script>";
		}
	}
	else{
		echo "<script>alert('用户需两位以上的字母,数字,或者下划线');location='register.php'</script>";
	}




?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>注册页面</title>
    <link rel="stylesheet" href="登录界面-1.css" type="text/css" />
    <link rel="stylesheet" href="./css/font-awesome.css" type="text/css" />
    <script src="登录界面-1.js"></script>
    <style type="text/css">
    	* {
		  margin: 0;
		  padding: 0;
		}

		body {
		  background-image: url("背景3.jpg");
		  background-repeat: no-repeat;
		  background-size: 100% auto;
		}

		#Login-box {
		  width: 25%;
		  height: auto;
		  margin: 0 auto;
		  margin-top: 15%;
		  padding: 20px 20px 10px 20px;
		  text-align: center;
		  background-color: rgba(0, 0, 0, 0.5);
		  border-radius: 6px;
		}

		#Login-box .form .item {
		  margin-top: 13px;
		}

		#Login-box .form .item i {
		  font-size: 16px;
		  color: #fff;
		}

		#Login-box .form .item input {
		  border: 0;
		  border-bottom: 2px solid white;
		  padding: 5px 10px;
		  background-color: rgba(255, 255, 255, 0);
		  background-color: hsb;
		}

		input::-webkit-input-placeholder {
		  color: #999;
		}

		#Login-box .form button {
		  margin-top: 15px;
		  width: 150px;
		  height: 30px;
		  font-size: 18px;
		  font-weight: 600;
		  font-family: Arial, Helvetica, sans-serif;
		  background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
		  border: 0;
		  border-radius: 15px;
		  transition: 0.9s;
		}

		#Login-box .form button:hover {
		  transform: scale(1.1) translate3d(0, 0, 0);
		  transition: 0.4s;
		  background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);
		}

		#Login-box #Register {
		  font-size: 13px;
		  float: right;
		  bottom: 15px;
		  box-sizing: border-box;
		  position: relative;
		}

		a {
		  color: #999;
		  transition: 1s;
		}

		a:link {
		  text-decoration: none;
		}

		a:hover {
		  color: #fff;
		  transition: 0.4s;
		}
		.code{
			position: relative;
			left:5px;
			margin-top: 13px;
		}
		#changecode{
			position: relative;
			bottom:5px;
			color: black;
			font-size: 13px;
		}
</style>
  </head>

  <body>
    <div id="Login-box">
      <h2 style="color: #fff;">注册</h2>
      <div class="form">
        <form name="Form" action="checkregister.php" method="POST">
          <div class="item">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <input type="text" placeholder="Username" name="user" />
          </div>
          <div class="item">
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="password" placeholder="Password" name="key" />
          </div>
          <div class="item">
            <i class="fa fa-key" aria-hidden="true"></i>
            <input type="text" placeholder="验证码" name="code" />
          </div>
          <div class="code">
	        <img src="test.php">
	        <a href="" id="changecode">看不清？换一张</a>
	      </div>
          <button type="submit">确认</button>
        </form>
      </div>
    </div>
    
  </body>
</html>



  

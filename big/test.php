<?php
	session_start();
	$im = imagecreatetruecolor(100, 30); //创建100*100大小的画布
	$color = imagecolorallocate($im, 255, 250, 240); //设置一个颜色变量为红色
	imagefill($im, 0, 0, $color); //将背景设为红色
	$captch_code='';
    for ($i=0;$i<4;$i++) {
        $fontsize=6;
        $fontcolor=imagecolorallocate($im,rand(0,120),rand(0,120),rand(0,120));
        //产生随机数字0-9
        $fontcontent = rand(0,9);
        $captch_code.= $fontcontent;
       //数字的位置，0，0是左上角。不能重合显示不完全
        $x=($i*100/4)+rand(5,10);
        $y=rand(5,10);
        imagestring($im,$fontsize,$x,$y,$fontcontent,$fontcolor);
    }
    for ($i=0; $i < 200; $i++) {
        $pointcolor = imagecolorallocate($im,rand(50,200),rand(50,200),rand(50,200));
        imagesetpixel($im, rand(1,99), rand(1,29), $pointcolor);
    }
    for ($i=0; $i < 3; $i++) {
        $linecolor = imagecolorallocate($im,rand(80,220),rand(80,220),rand(80,220));
        imageline($im, rand(1,99), rand(1,29),rand(1,99), rand(1,29) ,$linecolor);
    }
	header('Content-type:image/png'); //通知浏览器这不是文本而是一个图片
	imagepng($im); //生成PNG格式的图片输出给浏览器
	imagedestroy($im); //销毁图像资源，释放画布占用的内存空间
	$_SESSION['code'] = $captch_code;
	
?>
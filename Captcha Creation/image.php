<?php
session_start();
header('content-type:image/jpeg');
$text=$_SESSION['code']=mt_rand(11111, 99999);
$font_size=20;
$font_width=120;
$font_height=50;
$image=imagecreate($font_width, $font_height);
imagecolorallocate($image,255,0,255);
$font_color=imagecolorallocate($image, 0, 0, 0);
//$color=imagecolorallocate($image, 255, 0, 0);
for($x=1;$x<=60;$x++)
{
	$x1=rand(1, 100);
	$y1=rand(1,100);
	$x2=rand(1,100);
	$y2=rand(1,100);
	imageline($image, $x1, $y1, $x2, $y2, $font_color);
}
imagettftext($image, $font_size, 0, 20, 40, $font_color , 'font.ttf', $text);
imagejpeg($image);
?>
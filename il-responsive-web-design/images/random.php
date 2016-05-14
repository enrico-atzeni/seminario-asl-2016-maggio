<?php

function getRandomByte($max=255){
	if(!is_numeric($max))
		$max = 255;
	return rand(0,$max);
}

//START
$code = $_GET['code'];

$red = getRandomByte($code);
$green = getRandomByte($code);
$blue = getRandomByte($code);

$width = 250;
$height = 200;

//IMAGE
$t = imagecreatetruecolor($width,$height);

$color = imagecolorallocate($t, $red, $green, $blue);
imagefill($t,0,0,$color);

header('Content-type: image/png');

imagepng($t);
imagedestroy($t);
?>
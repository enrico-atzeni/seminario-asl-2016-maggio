<?php

define('__blu_HEX','145572');
define('__red_HEX','c44e4f');

function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
function get_color_from_filter($filter){
	switch($filter){
		case 'blueFilter':
			return hex2rgb(__blu_HEX);
		break;
		case 'redFilter':
			return hex2rgb(__red_HEX);
		break;
		default:
			return hex2rgb(__red_HEX);
		break;
	}
}
//START

if(isset($_GET['hex']) && $_GET['hex'] != '')
	$hex = $_GET['hex'];
elseif(isset($_GET['rgb']) && $_GET['rgb'] != '')
	$rgb = $_GET['rgb'];
elseif(isset($_GET['filter']) && $_GET['filter'] != '')
	$rgb = get_color_from_filter($_GET['filter']);
else
	$hex = __red_HEX;

if(!isset($rgb))
	$rgb = hex2rgb($hex);
elseif(!is_array($rgb))
	$rgb = explode($rgb);

if(isset($_GET['w']) && $_GET['w'] != '')
	$w = $_GET['w'];
else
	$w = 350;

if(isset($_GET['h']) && $_GET['h'] != '')
	$h = $_GET['h'];
else
	$h = 250;

//IMAGE
$t = imagecreatetruecolor($w,$h);

$color = imagecolorallocate($t, $rgb[0], $rgb[1], $rgb[2]);
imagefill($t,0,0,$color);

header('Content-type: image/png');

imagepng($t);
imagedestroy($t);
?>
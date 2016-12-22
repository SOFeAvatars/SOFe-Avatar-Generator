<?php

header("Content-type: image/png");

$r = $_GET['r'];
$g = $_GET['g'];
$b = $_GET['b'];

$img = imagecreatetruecolor(120, 120);
$bg = imagecolorallocate($img, 237, 237, 237);
$color = imagecolorallocate($img, $r, $g, $b);

imagefill($img, 0, 0, $bg);

imagefilledrectangle($img, 10, 10, 50, 50, $color);
imagefilledrectangle($img, 70, 10, 110, 50, $color);

imagefilledrectangle($img, 30, 70, 50, 90, $color);
imagefilledrectangle($img, 70, 70, 90, 90, $color);

imagefilledrectangle($img, 10, 90, 110, 110, $color);

imagepng($img);
imagedestroy($img);

?>

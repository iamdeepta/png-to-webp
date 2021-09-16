<?php 

$imgLocationBefore = 'symptoms-bg.jpg';

$imgLocationAfter = 'symptoms-bg.webp';

$img = imagecreatefromjpeg($imgLocationBefore);
imagepalettetotruecolor($img);
imagealphablending($img, true);
imagesavealpha($img, true);

imagewebp($img, $imgLocationAfter, 80);

imagedestroy($img);

?>
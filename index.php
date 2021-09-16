<?php 

$imgLocationBefore = 'close-dark.png';

$imgLocationAfter = 'close-dark.webp';

$img = imagecreatefrompng($imgLocationBefore);
imagepalettetotruecolor($img);
imagealphablending($img, true);
imagesavealpha($img, true);

imagewebp($img, $imgLocationAfter, 80);

imagedestroy($img);

?>
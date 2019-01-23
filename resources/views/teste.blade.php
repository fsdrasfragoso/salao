<?php 
function create_image(){
$im = imagecreate(200,250) or die ("GD library not activated");
imagecolorallocate($im,40,100,50);

imagepng($im,"storage/public/demoimage.png");
}

create_image();
?>

<img src="storage/public/demoimage.png">

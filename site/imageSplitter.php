<?php
$image = imagecreatefromjpeg("images/grant.jpg");
$width = imagesx($image);
$height = imagesy($image);

echo "<xmp>";
var_dump($width);
var_dump($height);
echo "</xmp>";



$blkSize = 20;
$count = 1;

for ($j = 0; $j < $height; $j += $blkSize)
{
  for ($i = 0; $i < $width; $i += $blkSize)
  {
    echo "<xmp>";
    print_r("Location x: ".$i." y: ".$j);
    echo "</xmp>";
    
    $tmp_img = imagecreatetruecolor($blkSize, $blkSize);

    imagecopyresized($tmp_img, $image, 0, 0, $i, $j, $blkSize, $blkSize, $blkSize, $blkSize);

    //write out the image
    imagejpeg($tmp_img,"images/chunks/".$count.".jpeg");
    $count++;
  }
}




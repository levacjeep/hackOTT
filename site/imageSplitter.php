<?php
function splitImage($filePath, $folder)
{
  $attr = array();
  $image = imagecreatefromjpeg($filePath);
  $width = imagesx($image);
  $height = imagesy($image);

  $blkSizeWidth = $width/32;
  $blkSizeHeight = $height/32;
  if($blkSizeHeight <= 15) $blkSizeHeight = 20;
  if($blkSizeWidth <= 15) $blkSizeWidth = 20;

  $attr['blkSizeWidth'] = $blkSizeWidth;
  $attr['blkSizeHeight'] = $blkSizeHeight;

  $attr['width'] = $width;
  $attr['height'] = $height;

  $folderPath = "images/chunks/".$folder;
  $attr['folderPath'] = $folderPath;
  if(is_dir($folderPath))
    deleteDir($folderPath);
  mkdir($folderPath,0777,TRUE);

  /*echo "<xmp>";
  var_dump($width);
  var_dump($height);
  echo "</xmp>";*/

  $count = 1;

  for ($j = 0; $j < $height; $j += $blkSizeHeight)
  {
    for ($i = 0; $i < $width; $i += $blkSizeWidth)
    {
      /*echo "<xmp>";
      print_r("Location x: ".$i." y: ".$j);
      echo "</xmp>";*/

      $tmp_img = imagecreatetruecolor($blkSizeWidth, $blkSizeHeight);

      imagecopyresized($tmp_img, $image, 0, 0, $i, $j, $blkSizeWidth, $blkSizeHeight, $blkSizeWidth, $blkSizeHeight);

      //write out the image
      imagejpeg($tmp_img,$folderPath."/".$count.".jpeg");
      $count++;
    }
  }

  $attr['count'] = $count;
  return $attr;
}
function deleteDir($dir) {
   // open the directory
   $dhandle = opendir($dir);

   if ($dhandle) {
      // loop through it
      while (false !== ($fname = readdir($dhandle))) {
         // if the element is a directory, and 
         // does not start with a '.' or '..'
         // we call deleteDir function recursively 
         // passing this element as a parameter
         if (is_dir( "{$dir}/{$fname}" )) {
            if (($fname != '.') && ($fname != '..')) {
               deleteDir("$dir/$fname");
            }
         // the element is a file, so we delete it
         } else {
            unlink("{$dir}/{$fname}");
         }
      }
      closedir($dhandle);
    }
   // now directory is empty, so we can use
   // the rmdir() function to delete it
   rmdir($dir);
}


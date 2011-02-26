<?php
function getChunks() {
  $path = "images/chunks";
  $dir = opendir($path);

  $total = 0;
  //count the total number of jpegs so we can loop through secquentially
  $images = array();
  while (false !== ($fname = readdir($dir)))
  {
    $info = pathinfo($path.$fname);
    if(strtolower($info['extension'] == 'jpeg'))
    {
      //strip out the int from the filename
      list($folder,$key) = str_split($info['filename'],6);

      $images[$key] = $key.".jpg";
      $total++;
    }
  }

  closedir($dir);

  //resort the array properly
  ksort($images);

  echo "<xmp>";
  print_r("Total Images: ".$total);
  echo "</xmp>";
  echo "<xmp>";
  print_r($images);
  echo "</xmp>";

  $imageString = '';
  foreach($images as $image)
  {
    $imageString .= '<img src="'.$path.$image.'"/>';
  }

  echo "<xmp>";
  print_r($imageString);
  echo "</xmp>";
  die;
  return $imageString;

}

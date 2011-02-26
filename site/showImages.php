<?php
function showImages($folder,$width, $height) {
  $path = "images/chunks/".$folder;
  $dir = opendir($path);

  $total = 0;
  //count the total number of jpegs so we can loop through secquentially
  $images = array();
  while (false !== ($fname = readdir($dir)))
  {
    $info = pathinfo($path.$fname);
    if(strtolower($info['extension']) == 'jpeg')
    {
      //strip out the int from the filename
      list($folder,$key) = str_split($info['filename'],strlen($folder));

      $images[$key] = $key.".jpeg";
      $total++;
    }
  }

  closedir($dir);

  //resort the array properly
  ksort($images);

  $imageString = '';
  foreach($images as $key=>$image)
  {
    $imageString .= '<div class="pixi '.$key.'" key="'.$key.'" folder="'.$folder.'" width="'.$width.'" height="'.$height.'" style="width:'.$width.'px; height:'.$height.'px;">';
    //$imageString .= '<a href="#">';
    $imageString .= '<img src="'.$path.'/'.$image.'"/>';
    //$imageString .= '</a>';
    $imageString .= '</div>';
  }

  return $imageString;
}

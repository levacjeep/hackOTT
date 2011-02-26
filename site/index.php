<?php
  require 'pixiClass.php';
  require_once 'showImages.php';
  require_once 'imageSplitter.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <link rel = "stylesheet" type="text/css" href="style.css" >
  <title>hackOTT</title>
  <script type="text/javascript" charset="utf-8" src="jquery.js"></script>
  <script type="text/javascript" charset="utf-8" src="scripts.js"></script>
</head>
<body>
<div id="page-wrapper">
<h1>ColorFace</h1>

<h2>A face re-maker based on the piximilar API!</h2>

<?php
  $details = splitImage("images/grant.jpg","grant",100);
  
  echo "<xmp>";
  print_r($details);
  echo "</xmp>";
  
  /*$imageString = showImages("grant");
  echo "<xmp>";
  print_r($imageString);
  echo "</xmp>";*/
  

?>

<canvas id="ourCanvas"></canvas>
  <div id="chunks">
    <?php //print getChunks();?>
  </div>
</div>  
</body>
</html>

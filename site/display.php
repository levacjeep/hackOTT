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

<form name="newad" method="post" enctype="multipart/form-data" action="">
<table>
  <tr><td><input type="file" name="image"></td></tr>
  <tr><td><input name="Submit" type="submit" value="Upload image"></td></tr>
</table>
</form>

<a href="#" id="convertImage">Convert Image</a>
<?php
  $size = 20;
  $details = splitImage("images/grant.jpg","grant",$size);
  
  $imageString = showImages("grant",$size);
?>
  <div id="chunks" style="width: <?php print $details['width']; ?>px; height: <?php print $details['height']; ?>px;">
    <?php print $imageString;?>
  </div>
</div>  
</body>
</html>

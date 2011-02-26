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
<h1>Collage Maker</h1>

<h2>An image collage maker based on the piximilar API!</h2>


<form name="newad" method="post" enctype="multipart/form-data" action="upload.php">
<table>
  <tr><td><input type="file" name="image"></td></tr>
  <tr><td><input name="Submit" type="submit" value="Upload image"></td></tr>
</table>
</form>
</body>
</html>

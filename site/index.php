<?php
  require 'pixiClass.php';
  require_once 'showImages.php';
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
<h1>Color Face</h1>

<h2>A face re-maker based on the piximilar API!</h2>

  <?php
      $pixiMatch = new pixiMatch();
  ?>

  
<canvas id="ourCanvas"></canvas>
  <div class="pixi 1"><img src="images/me.jpg"/></div>

  <div id="chunks">
    <?php print getChunks();?>
  </div>
</div>  
</body>
</html>

<?php
  require 'pixiClass.php';
  require_once 'showImages.php';
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <title>hackOTT</title>
  <script type="text/javascript" charset="utf-8" src="scripts.js"></script>
  
</head>
<body>
  <canvas id="ourCanvas"></canvas>


  <?php
      $pixiMatch = new pixiMatch();
  ?>

  <div id="chunks">
<?php
echo "<xmp>";
print_r(getChunks());
echo "</xmp>";

?>
    <?php print getChunks();?>
  </div>
  
</body>
</html>

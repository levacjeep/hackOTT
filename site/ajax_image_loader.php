<?php
  require 'pixiClass.php';
      
  $pixiMatch = new pixiMatch($_GET['file'],$_GET['folder']);
  $pixiMatch->printImage();
?>

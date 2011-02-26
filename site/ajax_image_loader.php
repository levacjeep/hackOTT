<?php
  require 'pixiClass.php';
      
  $pixiMatch = new pixiMatch($_GET['file']);
  $pixiMatch->printImage();
?>

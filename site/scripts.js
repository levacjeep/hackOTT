$(document).ready(function(){
  $('.pixi').each(function() {
    $(this).load("ajax_image_loader.php?file=me.jpg");
    });
});

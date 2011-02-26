function initialize() {
  var canvas = document.getElementById("ourCanvas");

  var blkWidth = 50;
  var blkHeight = 50;

  if(canvas.getContext)
  {
    var ctx = canvas.getContext("2d");

    var img = new Image();
    img.onload = function(){
      canvas.width = img.width;
      canvas.height = img.height;
      console.log("width: "+img.width);
      console.log("height: "+img.height);
      ctx.drawImage(img, 0, 0, img.width, img.height);

      ctx.strokeStyle = "#ffffff";
      ctx.fillStyle = "rgba(255,0,0,0.5)";
      

      var imgd = ctx.getImageData(0,0);

      var pix = imgd.data;
      console.log(pix);

      //process image getting chunks
      for (var i = 0; i < img.width; i += blkWidth) {
        console.log(i);
        for (var j = 0; j < img.height; j += blkHeight) {
          ctx.save();
          ctx.translate(i,j);
          ctx.strokeRect(0,0,blkWidth,blkHeight);
          ctx.fillRect(0,0,blkWidth,blkHeight);
          ctx.restore();
        };
      };
    }

    img.src = "images/grant.jpg";
  }

}
window.onload = initialize;

<?php
class pixiMatch{

  //private $apiurl = 'http://piximilar-rw.hackott.tineye.com/rest/';
  private $apiurl = 'http://piximilar-rw.hackott.tineye.com/';
  public $image;
  public $folder;
  public $return_image;
  public $zipid='';

  public function __construct($image,$folder)
  {
    $this->folder = $folder;
    $this->image = 'images/chunks/'.$folder.'/'.$image;

    $post = 'method=color_search';
    $ch = curl_init($this->apiurl.'rest/?'.$post);

    $params = array('image'=>'@'.getcwd().'/'.$this->image.';type=image/jpeg');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

    $data = curl_exec($ch);
    curl_close($ch); 

    $data = json_decode($data, true);
    $this->return_image = $data['result'][rand(0,9)]['filepath'];

    
    $test = explode('_',$this->return_image);
    if($test[0])
    {
      $test = explode('/',$test[0]));
      if($test[1])
      {
        $this->zipid = '1'.$test[1];
      }
    }
  }

  public function printImage($width, $height)
  {
    print '<a target="_blank" href="http://www.zip.ca/browse/title.aspx?f=titleId('.$this->zipid.')"><img height="'.$height.'px" width="'.$width.'px" src="'.$this->apiurl.'collection/?filepath='.$this->return_image.'"/></a>';
  }
}
?>

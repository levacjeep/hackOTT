<?php
class pixiMatch{

  //private $apiurl = 'http://piximilar-rw.hackott.tineye.com/rest/';
  private $apiurl = 'http://piximilar.hackott.tineye.com/';
  public $image;
  public $return_image;

  public function __construct($image = 'me.jpg')
  {
    $this->image = '/images/'.$image;
    $post = 'method=color_search';
    $ch = curl_init($this->apiurl.'rest/?'.$post);

    $params = array('image'=>'@'.getcwd().'/'.$this->image.';type=image/jpeg');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

    $data = curl_exec($ch);
    curl_close($ch); 

    $data = json_decode($data, true);
    $this->return_image = $data['result'][0]['filepath'];
  }

  public function printImage()
  {
    print '<img src="'.$this->apiurl.'collection/?filepath='.$this->return_image.'"/>';
  }
}
?>

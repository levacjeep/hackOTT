<?php

class pixiMatch{

  //private $apiurl = 'http://piximilar-rw.hackott.tineye.com/rest/';
  private $apiurl = 'http://piximilar.hackott.tineye.com/rest/';
  public $image;

  public function __construct()
  {
    //temp
    $this->image = 'images/me.jpg';

    $post = 'method=color_search';

    $ch = curl_init($this->apiurl.'?'.$post);
    $params = array('image'=>'@/Users/jpl/htdocs/hackOTT/site/images/me.jpg;type=image/jpeg');
    //curl_setopt($ch, CURLOPT_HEADER, 1);
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    $data = curl_exec($ch);
    curl_close($ch); 

    echo '<xmp>';
    var_dump(json_decode($data, true));
    echo '</xmp>';
    die;


  }

}

?>

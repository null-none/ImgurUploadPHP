<?php
   class Imgur {
     var $clientId;
     var $timeout = 30;
     
     function curlQuery($params, $url) {
       $curl = curl_init();
       curl_setopt($curl, CURLOPT_URL, $url);
       curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
       curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $this->clientId));
       curl_setopt($curl, CURLOPT_POST, 1);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
       $out = curl_exec($curl);
       curl_close ($curl);
       return json_decode($out,true);      
     }

     function uploadImage($params) {
      $url = 'https://api.imgur.com/3/image.json';
      return $this->curlQuery($params, $url);
     }   
   }

  $imgur = new Imgur;
  $imgur->clientId = 'code';
  $filename = 'images/browserling.png';
  $handle = fopen($filename, "r");
  $data = fread($handle, filesize($filename));
  $params   = array('image' => base64_encode($data));
  $result = $imgur->uploadImage($params);
  print_r($result);

?>


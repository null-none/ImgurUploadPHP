# ImgurUploadPHP
Class for use imgur API.

```
  $imgur = new Imgur;
  $imgur->clientId = 'code';
  $filename = 'images/browserling.png';
  $handle = fopen($filename, "r");
  $data = fread($handle, filesize($filename));
  $params   = array('image' => base64_encode($data));
  $result = $imgur->uploadImage($params);
  print_r($result);
```

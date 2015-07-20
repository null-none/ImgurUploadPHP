# ImgurUploadPHP

PHP class for quickly uploading images to Imgur.

``` php
$imgur = new ImgurUploader;
$imgur->setClientId('clientID');
$result = $imgur->uploadImage('browserling.png');
if (!$result) {
  $error = $imgur->getError();
  print "Upload failed. Error: $error";
}
else if ($result['status'] != 200) {
  print "Upload failed. Error: " . $result['data']['error'];
  print_r($result);
}
else {
  print "Upload successful!";
  print_r($result);
}
```

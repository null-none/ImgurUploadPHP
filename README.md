# ImgurUploadPHP

PHP class for quickly uploading images to Imgur.

```
$imgur = new ImgurUploader;
$imgur->setClientId('clientID');

$result = $imgur->uploadImage('images/browserling.png');
if (!$result) {
  $error = $imgur->getError();
  print "Error: $error";
}

print_r($result);
```

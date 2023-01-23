<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$error = $_FILES['my_file']['error'];
if($error != UPLOAD_ERR_OK) {
    echo "Error occured";
    die;
}
$target_dir = "data/";
$target_filename = uniqid(). basename($_FILES['my_file']['name']);
$target_file = $target_dir.$target_filename;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "png" && $imageFileType != "jpeg"
     ) {
    echo "Sorry, only PNG, JPEG files are allowed.";
    die;
}
if ($_FILES["my_file"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    die;
}
$temporateFile = $_FILES['my_file']['tmp_name'];
move_uploaded_file($temporateFile,$target_file);
echo 'upload successful';

$array = [];
$array['storage_name'] = $target_filename;
$array['name'] = $_FILES["my_file"]["name"];
$array['size'] = $_FILES["my_file"]["size"];
$array['path'] = $target_dir;
$array['date'] = date_create()->format('Y-m-d H:i');

$jsonDecode = [];
$jasonGET = file_get_contents('UploadDataJson.json');
if($jasonGET) {
$jsonDecode = json_decode($jasonGET, true);
}
$jsonDecode[] = $array;
$jasonEncode = json_encode($jsonDecode, JSON_PRETTY_PRINT);
file_put_contents('UploadDataJson.json', $jasonEncode);
?>

</body>
</html>
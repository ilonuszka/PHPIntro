<?php
echo 'kkk';
var_dump($_POST);
$fileID = $_POST['FileID'];//$_POST['fname']
echo $fileID;
$jsonDecode = [];
$jasonGET = file_get_contents('UploadDataJson.json');
if($jasonGET) {
    $jsonDecode = json_decode($jasonGET, true);
}

$status = unlink($jsonDecode[$fileID]['path'].$jsonDecode[$fileID]['storage_name']);
if ($status) {
    echo "File deleted successfully";
    echo $jsonDecode[$fileID];
    unset($jsonDecode[$fileID]);
    $jasonEncode = json_encode($jsonDecode, JSON_PRETTY_PRINT);
    file_put_contents('UploadDataJson.json', $jasonEncode);
    echo "file deleted successfully";
} else {
    echo "Sorry!";
}


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
    echo 'Form was subbmited!';
    $content['todo'] = $_POST['todo'];
    $content['dueDate'] = $_POST['dueDate'].' '. $_POST['time'];
    $content['created'] = date_create()->format('Y-m-d H:i');
    var_dump($_POST['delete']);

    $textfile = 'todo.json';
    $space = file_get_contents("todo.json",true);
    $json = json_decode($space, true);

    if ($json) $json[] = $content;
    else $json[0] = $content;

    $encodedJson = json_encode($json, JSON_PRETTY_PRINT);
    file_put_contents($textfile, $encodedJson);
?>
</body>
</html>
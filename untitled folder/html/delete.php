<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="1;url=/TODO.php" />
    <title>Document</title>
</head>
<body>
<?php
$space = file_get_contents("todo.json",true);
$json = json_decode($space, true);

if ($json) {
    unset($json[$_POST['todoID']]);
    $encodedJson = json_encode($json, JSON_PRETTY_PRINT);
    $textfile = 'todo.json';
    file_put_contents($textfile, $encodedJson);
    echo 'Todo item was deleted';
}
?>
</body>
</html>
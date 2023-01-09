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
$space = file_get_contents("todo.json",true);
$json = json_decode($space, true);
if (!$json) die('Error');
$id = $_POST['editID'];
$todoItem= $json[$id];
?>
<form method="POST" action="edit-submit.php">
    <fieldset>
        <legend>TO DO List:</legend>
        <input type="text" id="todo" name="todo" value="<?php echo $todoItem['todo'] ?>">
        <input type="hidden" id="editID" name="editID" value="<?php echo $_POST['editID']?>">
        <input type="submit" name="submit" value="Submit" />
    </fieldset>
</form>
</body>
</html>
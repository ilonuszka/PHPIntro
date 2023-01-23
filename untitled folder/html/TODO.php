<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="todosubmi.php">
    <fieldset>
        <legend>TO DO List:</legend>
            <input type="text" id="todo" name="todo" value="todo">
            <input type="date" id="dueDate" name="dueDate">
            <input type="time" id="time" name="time">
            <input type="submit" name="submit" value="Submit" />
    </fieldset>
</form>
    <fieldset>
        <legend>TODOS</legend>
            <?php
            $space = file_get_contents("todo.json",true);
            $json = json_decode($space, true);
            if ($json) foreach ($json as $key=>$item){
                echo $item['todo'].', created at:'.$item['created'].', due date:'.$item['dueDate'];
                echo '<form style="display: inline" method="POST" action="edit.php">
                        <input type="submit" name="edit" value="Edit" />
                        <input type="hidden" id="editID" name="editID" value="'.$key.'">
                      </form>';
                echo '<form style="display: inline" method="POST" action="delete.php">
                        <input type="submit" name="delete" value="Delete" />
                        <input type="hidden" id="todoID" name="todoID" value="'.$key.'">
                      </form><br>';
            }
        ?>
    </fieldset>

</body>
</html>

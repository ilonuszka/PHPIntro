<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Uploaded files:</legend>
        <form action="submit.php" method = 'POST' enctype="multipart/form-data">
            <input type="file" name ="my_file"/>
            <button type="submit">Upload</button>
        </form>
    </fieldset>
    <?php
        $jsonDecode = [];
        $jasonGET = file_get_contents('UploadDataJson.json');
        if($jasonGET) {
            $jsonDecode = json_decode($jasonGET, true);
        }
    ?>

    <fieldset>
        <legend>Uploaded files:</legend>
        <?php foreach ($jsonDecode as $key => $item):?>
        <div>
            <div><a href="/download.php?file=<?php echo $item['path'].$item['storage_name'] ?>"><?php echo $item['name'];?></a></div>
            <div><?php echo $item['path'] ?></div>
            <div><?php echo $item['size'] ?></div>
            <div><?php echo $item['date'] ?></div>

            <form style="display: inline" method="POST" action="delete.php">
                <input type="submit" name="delete" value="Delete" />
                <input type="hidden" id="FileID" name="FileID" value="<?php echo $key ?>">
            </form>
        </div>
        <?php endforeach;?>
    </fieldset>
</body>
</html>
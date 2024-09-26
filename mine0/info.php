
<?
    $data = require('25.09/data.php');
    $id = $_POST['id'];
    $good = findThing($data, $id)
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href=css/style.css" rel="stylesheet">
    </head>
    <body>
    <p><?= $good['name']?></p>
    <p><?= $good['description']?></p>
        
    <? foreach ($good['image'] as $img ): ?>
           <img src="25.09/<?= $img?>" alt="<?= $good['name']?>">
    <? endforeach?>
    </body>
</html>



<?php
 $data = require '25.09/data.php'
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
  <div class="goods">
     <? foreach ($data as $key):?> 
                <div class="cart">
                    <form method="post" action="info.php">
                    <input type="hidden" name="id" value="<?= $key['id']?>">
                     <img src="25.09/<?= $key['image'][0]?>" alt="test">
                    <p ><?= $key['name']?></p><br>
                    <button type="submit ">Купить</button>
                </div>
            </form>
        <? endforeach?>
  </div>
    </body>
</html>


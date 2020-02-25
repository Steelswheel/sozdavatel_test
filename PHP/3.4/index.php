<?php
require 'script.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="gallery">
        <?php for ($i = 0; $i < count($files); $i++) { ?>
          <img src="<?=$dir."/".$files[$i]?>" alt="" />
        <?php } ?>
      </div>

      <form class="form" method="get" action="redirect.php">
        <fieldset>
          <div><label for="first">Добавить картинку:</label></div>
          <input type="file" value="" name="first" placeholder="Добавить изображение..." class="download">
        </fieldset>
        <button type="submit" name="button" class="button">Загрузить файл</button>
      </form>
    </div>
  </body>
</html>

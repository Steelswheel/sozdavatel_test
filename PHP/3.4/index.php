<?php require 'script.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="gallery">
        <?php for ($i = 0; $i < count($files); $i++) { ?>
          <div><img src="<?=$dir. "/" . $files[$i]?>" alt="" /><div>
        <?php } ?>
      </div>

      <form enctype="multipart/form-data" class="form" method="post" action="redirect.php">
        <fieldset>
          <div><label for="inputfile">Добавить картинку:</label></div>
          <input type="file" value="" name="inputfile" placeholder="Добавить изображение..." class="inputfile">
        </fieldset>
        <button type="submit" name="button" class="button">Загрузить файл</button>
      </form>
    </div>
  </body>
</html>

<?php
 header("Refresh: 5; url=$_SERVER[HTTP_REFERER]");
 require 'script.php';

 if ($_SERVER['REQUEST_METHOD'] == "POST" ) {

  if ($_FILES['inputfile']['error'] == 0 && $_FILES['inputfile']['type'] == 'image/jpeg') {
    $destiation_dir = $dir . '/' . $_FILES['inputfile']['name'];
    if (move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir)) {
      echo "Изображение загружено!";
    } else {
        echo "Изображение не загружено!";
    }
  } else {
    switch ($_FILES['inputfile']['error']) {
      case UPLOAD_ERR_NO_FILE:
        echo 'Файл не загружен!';
        break;
      default:
        echo 'Что-то пошло не так';
        }
    }
}
?>

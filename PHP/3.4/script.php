<?php
  function excess($files) {
    $result = array();
    for ($i = 0; $i < count($files); $i++) {
      if(preg_match("/\.(jpg)$/", $filename)) $result[] = $files[$i];
    }
    return $result;
  }
  $dir = "images";
  $files = scandir($dir);
  $files = excess($files);
?>

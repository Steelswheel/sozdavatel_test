<?php
$first = $_GET["first"];
$second = $_GET["second"];
$option = $_GET["options"];

if ($first && $second) {
  switch ($option) {
    case "addiction":
      $result = $first + $second;
      break;
    case "substraction":
      $result = $first - $second;
      break;
    case "multiplication":
      $result = $first * $second;
      break;
    case "division":
      $result = $first / $second;
      break;
  }
}
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
      <form class="form" method="get" action="script.php">
        <fieldset>
          <div><label for="first">Результат вычислений:</label></div>
          <input type="text" value="<?= $result ?>" name="result" class="result">
        </fieldset>
      </form>
    </div>
  </body>
</html>

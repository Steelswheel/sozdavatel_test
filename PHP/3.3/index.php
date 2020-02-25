<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="wrapper">
      <form class="form" method="get" action="form.php">
        <fieldset>
          <div><label for="first">Введите первое число:</label></div>
          <input type="text" value="" name="first" placeholder="Первое число" class="first">
        </fieldset>
        <fieldset>
          <div><label for="options">Выберите действие:</label></div>
          <select class="options" name="options">
            <option value="addiction">+</option>
            <option value="substraction">-</option>
            <option value="multiplication">*</option>
            <option value="division">/</option>
          </select>
        </fieldset>
        <fieldset>
          <div><label for="second">Введите второе число:</label></div>
          <input type="text" value="" name="second" class="second" placeholder="Второе число">
        </fieldset>
        <button type="submit" name="button" class="button">Посчитать</button>
      </form>
    </div>
  </body>
</html>

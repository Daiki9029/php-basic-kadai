<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
  <p>
  <?php
$personal_data = ['id' => 1, 'name' => '侍太郎', 'age' => 30];
    foreach ($personal_data as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
  ?>
  </p>
  </body>

</html>

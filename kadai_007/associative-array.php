<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>

  <body>
  <p>
  <?php
  $onion_data = ['name' => 'onion', 'price' => 200, 'weight' => 160];
  print_r($onion_data);
  echo '<br>';
  print_r($onion_data['price']);

  ?>
  </p>
  </body>

</html>

<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php
      function sort_2way($array, $order)
      {
        $nums = [15, 4, 18, 23, 10];

        if ($order) {
          sort_2way($nums, TRUE);
          sort($nums);
          echo "昇順ソート<br>";
          foreach ($nums as $val) {
            $array[$val] = $val;
            echo $array[$val] . '<br>';
          }
        } else {
          sort_2way($nums, FALSE);
          rsort($nums);
          echo "降順<br>";
          foreach ($nums as $val) {
            $array[$val] = $val;
            echo $array[$val] . '<br>';
          }
        }
      }













      ?>
    </p>
  </body>

</html>

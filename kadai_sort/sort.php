<?php
      function sort_2way($array, $order)
      {

        if ($order) {
          sort($array);
          echo "昇順ソート<br>";
        } else {
          rsort($array);
          echo "降順<br>";
        }

        foreach ($array as $val) {
            echo $val . '<br>';
        }

      }

      $nums = [15, 4, 18, 23, 10];

      sort_2way($nums, TRUE);
      sort_2way($nums, FALSE);

      ?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_sort</title>
</head>
<body>
  <p>
    <?php
    
    function sort_2way($array, $order) {
      if ($order === TRUE) {
        echo '昇順にソートします。<br>';
        sort($array);
        foreach ($array as $val) {
          echo $val . '<br>';
        }
      } else {
        echo '降順にソートします。<br>';
        rsort($array);
        foreach ($array as $val) {
          echo $val . '<br>';
        }
      }
    }

    $num = [15, 4, 18, 23, 10 ];
    sort_2way($num, TRUE);
    sort_2way($num, FALSE);

    ?>
  </p>
</body>
</html>
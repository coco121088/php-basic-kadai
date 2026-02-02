<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
      <?php
            // ソート用の配列を作成
            function sort_2way($array, $order)
                {
                    if ($order === TRUE) {
                        sort($array);
                    } else {
                        rsort($array);
                    }

                    foreach ($array as $value) {
                        echo $value . "<br>";
                    }
                    echo "<hr>";
                }

                $nums = [15, 4, 18, 23, 10];

                sort_2way($nums, TRUE);
                sort_2way($nums, FALSE);

                
        ?>
    </p>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        function sort_2way($array, $order) {
            if ($order) {
                sort($array); 
            } else {
                rsort($array); 
            }
            return $array;
        }

        $nums = [15, 4, 18, 23, 10];

        echo "昇順ソート:<br>";
        $sorted_nums = sort_2way($nums, true);
        foreach ($sorted_nums as $num) {
            echo $num . "<br>";
        }

        echo "降順ソート:<br>";
        $sorted_nums = sort_2way($nums, false);
        foreach ($sorted_nums as $num) {
            echo $num . "<br>";
        }
        ?>
    </p>
</body>
</html>

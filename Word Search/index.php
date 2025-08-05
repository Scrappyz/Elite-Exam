<?php
    function wordSearch($target, $arr) {
        $output = [];
        for($i = 0; $i < count($arr); $i++) {
            if($arr[$i] == $target) {
                $output[] = $i;
            }
        }

        return $output;
    }

    $output = wordSearch("TWO", ["I","TWO","FORTY","THREE","JEN","TWO","tWo","Two"]);

    echo "[";
    for($i = 0; $i < count($output); $i++) {
        echo $output[$i];
        if($i < count($output) - 1) {
            echo ", ";
        }
    }
    echo "]";
?>
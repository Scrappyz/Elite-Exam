<?php
    function countTheIslands($matrix) {
        $output = [];
        for($i = 0; $i < count($matrix); $i++) {
            $str = "";
            for($j = 0; $j < count($matrix[$i]); $j++) {
                if($matrix[$i][$j] == 1) {
                    $str .= "X";
                } else {
                    $str .= "~";
                }
            }

            $output[] = $str;
        }

        return $output;
    }

    $output = countTheIslands(
        [
            [1,1,1,1],
            [0,1,1,0],
            [0,1,0,1],
            [1,1,0,0]
        ]
    );

    foreach($output as $o) {
        echo "\"$o\"";
        echo "<br>";
    }
?>
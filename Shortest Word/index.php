<?php 
    function shortestWord($str) {
        $arr = explode(" ", $str);
        $shortest = strlen($arr[0]);
        for($i = 1; $i < count($arr); $i++) {
            $temp = strlen($arr[$i]);
            if($temp < $shortest) {
                $shortest = $temp;
            }
        }

        return $shortest;
    }

    echo shortestWord("TRUE FRIENDS ARE ME AND YOU");
?>


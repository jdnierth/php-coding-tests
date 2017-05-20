<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jessica Nierth
 * Date: 5/20/2017
 * Time: 9:54 PM
 */
$_fp = fopen("test cases/test-cases-1.txt", "r");
$_fp_string = stream_get_contents($_fp);

function factorial($a,$b) {
    return $a * $b;
}

function generate_array($n) {
    $res = [];

    for($i = $n; $i >= 1; $i--) {
        array_push($res,$i);
    }

    return $res;
}

$res = generate_array($_fp_string);
$fac = array_reduce($res, "factorial",1);

echo $fac;
fclose($_fp);

?>
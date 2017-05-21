<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jessica Nierth
 * Date: 5/20/2017
 * Time: 9:54 PM
 */
$_fp = fopen("test cases/test-cases-1.txt", "r");
$_fp_string = stream_get_contents($_fp);
$binary = decbin($_fp_string);
$packet_of_ones = explode('0',$binary);

function count_ones($one_package) {
    $ones = 0;

    for($i = 0; $i < strlen($one_package); $i++) {

        if($one_package[$i] == 1) {
            $ones = $ones + 1;
        }
    }

    return $ones;
}

$res = array_map("count_ones", $packet_of_ones);

echo max($res);

fclose($_fp);

?>

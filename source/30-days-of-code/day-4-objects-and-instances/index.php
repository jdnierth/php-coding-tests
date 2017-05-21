<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jessica Nierth
 * Date: 5/21/2017
 * Time: 11:23 AM
 */
include_once('Person.php');

$_fp = fopen("test cases/test-cases.txt", "r");

$T = intval(fgets($_fp));

for($i=0;$i<$T;$i++){
    $age=intval(fgets($_fp));
    $p=new Person($age);
    $p->amIOld();
    for($j=0;$j<3;$j++){
        $p->yearPasses();
    }
    $p->amIOld();
    echo "\n";
}
?>
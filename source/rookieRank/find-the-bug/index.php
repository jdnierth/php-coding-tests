<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jessica Nierth
 * Date: 5/21/2017
 * Time: 2:36 PM
 */

$handle = fopen("test cases/test-cases.txt", "r");

function findTheBug($grid){

    for($i = 0; $i < count($grid); $i++){
        $column = strpos($grid[$i],"X");

        if($column) {
            return [$i,$column];
        }
    }
}

fscanf($handle, "%d",$n);
$grid = array();
for($grid_i = 0; $grid_i < $n; $grid_i++){

    fscanf($handle,"%s",$grid[]);
}
// Return an array containing [r, c]
$result = findTheBug($grid);
echo implode(",", $result)."\n";



?>
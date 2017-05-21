<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jessica Nierth
 * Date: 5/20/2017
 * Time: 8:43 PM
 */

$_fp = fopen("test cases/test-cases-1.txt", "r");

$_fp_string = stream_get_contents($_fp);
$_split = explode("\n", $_fp_string);
$_number_of_items = $_split[0];
$_results = [];

function generateMap($_split, $_number_of_items)
{
    $map = [];

    for ($i = 1; $i <= $_number_of_items; $i++) {

        $entry = explode(" ", $_split[$i]);

        $map[$entry[0]] = $entry[1];
    }

    return $map;
}

function findByName($map, $_split, $start_index)
{
    echo"<pre>";
    for ($i = $start_index; $i < count($_split); $i++) {

        $name = trim($_split[$i]);


        if (array_key_exists($name, $map)) {

            echo $name . "=" . $map[$name] . "\n";
        } else {
            echo "Not found" . "\n";
        }

    }
    echo"<pre>";
}

$map = generateMap($_split, $_number_of_items);
findByName($map, $_split, $_number_of_items + 1);
fclose($_fp);
?>
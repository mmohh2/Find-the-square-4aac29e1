<?php
$input = file_get_contents("input.txt");
$input = str_split($input, 11);
$pitarray = array();
$check = array("AA","EE","II","OO","UU");
$x = 0;
foreach ($input as $pos => $val) {
    $post = false;
    $letter = str_split($val);
    for ($i = 0; $i < count($check); $i++) {
        $pitstop = strpos($val, $check[$i]);
        if ($pitstop !== false) {
            array_push($pitarray, $pitstop);
            if ($pitstop === $pitarray[$pos] && $pos % 2 === 0) {
                echo $letter[$pitstop] . "($pitarray[$pos], $pos)";
            }
        }
    }
    echo PHP_EOL;
}
?>

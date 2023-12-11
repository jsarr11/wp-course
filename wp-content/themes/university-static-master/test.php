<?php

function doubleMe($k) {
    $l =  $k * 2;
    die(var_dump($l)); exit();
    return $l;
}

doubleMe(20);

?>
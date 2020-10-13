<?php

function distancia($a, $b) 
{
    if ($a === $b) {
        return 0;
    }

    if (mb_strlen($a) != mb_strlen($b)) {
        return false;
    }

    $ret = 0;

    for ($i = 0; $i < mb_strlen($a); $i++) {
        if (mb_substr($a, $i, 1) != mb_substr($b, $i, 1)) {
            $ret++;
        }
    }

    return $ret;
}
<?php

//declare(strict_types = 1);

function sum(?int $a, ?int $b): ?int
{
    return $a + $b;
}

var_dump(sum(null, null));
//echo sum(null, null);

?>
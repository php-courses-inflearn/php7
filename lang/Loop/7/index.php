<?php

$sum = 0;

for ($i = 1; $i <= 10; $i++) {
    continue;
    $sum += $i;
}

echo $sum;

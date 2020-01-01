<?php

for ($j = 1; $j <= 10; $j++) {
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 1) {
            // 2
            echo $i;
            // continue 2
            break 2;
        }
    }
    echo $j;
}

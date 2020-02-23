<?php

foreach (file(__DIR__ . '/bar.txt') as $line) :
    echo $line;
endforeach;

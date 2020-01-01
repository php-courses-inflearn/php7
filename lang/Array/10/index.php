<?php

$stack = [
    'front-end' => 'html/css',
    'back-end'  => 'php',
    'database'  => 'mysql',
];

/*
 * front-end: html/css
 * back-end: php
 * database: mysql
 */
foreach ($stack as $k => $v) {
    echo "$k: $v \n";
}

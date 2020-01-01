<?php

$developer = [
    'meta' => [
        'name' => 'Mansu Jeong',
        'age'  => 24,
    ],
    'statk' => [
        'front-end' => 'html/css',
        'back-end'  => 'php',
        'database'  => 'mysql',
    ],
];

/*
 * name: Mansu Jeong
 * age: 24
 * front-end: html/css
 * back-end: php
 * database: mysql
 */
foreach ($developer as $k => $v) {
    foreach ($v as $k2 => $v2) {
        echo "$k2: $v2 \n";
    }
}

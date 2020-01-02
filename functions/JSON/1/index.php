<?php

$arr = [
    'language' => 'php',
];

/**
 * JSON 으로 인코딩하기.
 */
$json = json_encode(range(1, 5), JSON_FORCE_OBJECT);

var_dump($json);

/*
 * JSON 으로 디코딩하기
 */
json_decode($json, true);

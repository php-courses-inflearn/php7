<?php

// 세션을 시작합니다.
session_start();

$providers = [
    /*
     * Authentication Guard
     */
    'guard' => 'Guard.php',

    /*
     * CSRF TOKEN
     */
    'csrf'  => 'CsrfToken.php',
];

foreach ($providers as $provider) :
    require_once __DIR__ . "/../providers/{$provider}";
endforeach;

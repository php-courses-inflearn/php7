<?php

require_once __DIR__ . '/../lib/Guard.php';

/**
 * Authentication Guard.
 */
$guards = [
    'board.write'         => '/board/write.php',
    'board.write_process' => '/board/write_process.php',
];

guard($guards);

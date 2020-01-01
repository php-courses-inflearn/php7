<?php

/**
 * Database
 */
$config = require_once './OdbcConfig.php';
list($driver, $database, $hostname, $username, $password) = array_values($config);

/**
 * ODBC 연결하기
 */
$conn = odbc_connect(
    sprintf(
        "Driver={%s};Server=%s;Database=%s;", 
        $driver, $hostname, $database
    ), $username, $password
);

return $conn;
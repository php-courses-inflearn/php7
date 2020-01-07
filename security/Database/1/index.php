<?php

/**
 * SQL Injection
 */
$conn = require_once './Database.php';

/**
 * Get data from User
 */
// list('email' => $email, 'password '=> $email) = $_POST;
// $email = 'pronist@naver.com';
$email = "' or 1='1";
$password = "secret";

/**
 * Case 1. Just Injection
 */
// SELECT * FROM user email = '' or 1='1'
$result = odbc_exec($conn, "SELECT * FROM user WHERE email = '{$email}'");

/**
 * Case 2. Prepare Statement
 */
// $result = odbc_prepare($conn, "SELECT * FROM user WHERE email = ?");
// odbc_execute($result, [
//     $email // $_POST['email']
// ]);

/**
 * Successful?
 */
if ($result /* && $row = odbc_fetch_array($result) */) {
    // if (password_hash($password ,$row['password'])) {}
     "Hello, world";
}

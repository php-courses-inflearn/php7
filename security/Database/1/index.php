<?php

/**
 * SQL Injection
 */
$conn = require_once './Database.php';

/**
 * 유저에게 데이터 받기
 */
// list('email' => $email, 'password '=> $email) = $_POST;
// $email = 'pronist@naver.com';
$email = "' or 1='1";
$password = "secret";

/**
 * Case 1. 변수를 그냥 넣기
 */
// SELECT * FROM user email = '' or 1='1'
$result = odbc_exec($conn, "SELECT * FROM user WHERE email = '{$email}'");

/**
 * Case 2. Prepare Statement 사용하기
 */
// $result = odbc_prepare($conn, "SELECT * FROM user WHERE email = ?");
// odbc_execute($result, [
//     $email // $_POST['email']
// ]);

/**
 * SQL 통과하였습니까?
 */
if ($result /* && $row = odbc_fetch_array($result) */) {
    // if (password_hash($password ,$row['password'])) {}
     "Hello, world";
}

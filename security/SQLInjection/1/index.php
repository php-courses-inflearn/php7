<?php

/**
 * Connection
 */
$conn = mysqli_connect(
    'localhost',
    'root',
    'root',
    'myapp_test'
);

/**
 * Get data from User.
 */
$_POST = [
    'email'     => "' or 1='1",
    // 'email'     => 'foo@exameple.com',
    'password'  => 'secret'
];
[ 'email' => $email, 'password' => $password ] = $_POST;

/**
 * Case 1. Just Injection.
 */
// SELECT * FROM users WHERE email = '' or 1='1' LIMIT 1
// $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' LIMIT 1");

/**
 * Case 2. Prepare Statement.
 */
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE email = ? LIMIT 1");

mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

/**
 * Successful?
 */
if (mysqli_num_rows($result)) {
    // if (password_hash($password ,$row['password'])) {}
    echo 'Hello, world';
}

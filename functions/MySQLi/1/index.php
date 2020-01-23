<?php

/**
 * Connection.
 */

$conn = mysqli_connect(
    'localhost',
    'root',
    'root',
    'myapp_test'
);

/**
 * Query Execute.
 */
mysqli_query($conn, 'CREATE TABLE tests (id INT AUTO_INCREMENT PRIMARY KEY, message VARCHAR(255))');

/**
 * Query Execute (Statement).
 */
// mysqli_autocommit($conn, false);

// $params = [ 'Hello, world' ];

$stmt = mysqli_prepare($conn, 'INSERT INTO tests(message) VALUES (?)');
// mysqli_stmt_bind_param($stmt, 's', ...$params);

mysqli_stmt_execute($stmt);

// mysqli_commit($conn);
// mysqli_rollback($conn);

/**
 * Select.
 */
$stmt = mysqli_prepare($conn, 'SELECT message FROM tests');
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
while ($row = mysqli_fetch_assoc($result)) {
    var_dump($row);
}

// mysqli_stmt_bind_result($stmt, $message);
// while (mysqli_stmt_fetch($stmt)) {
//     var_dump($message);
// }

mysqli_query($conn, 'DROP TABLE tests');

/**
 * Close connection.
 */
mysqli_close($conn);

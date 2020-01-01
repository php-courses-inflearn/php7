<?php

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

/**
 * 데이터베이스에 쿼리 준비하기
 */
$result = odbc_prepare($conn, "CREATE TABLE user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    validated TINYINT NOT NULL DEFAULT 0    
)");

/**
 * 데이터베이스에 쿼리 날리기
 */
odbc_execute($result);

/**
 * 데이터베이스 쿼리 처리하기
 */

// 데이터 넣기
 $result = odbc_prepare($conn, "INSERT INTO user(email, password) VALUES(?, ?)");
 odbc_execute($result, [
    'pronist@naver.com',
    password_hash("secret", PASSWORD_DEFAULT) 
 ]);
// 데이터 얻기
$result = odbc_prepare($conn, "SELECT * FROM user");
if (odbc_execute($result)) {
    while ($row = odbc_fetch_array($result)) {
        var_dump($row);
    }
}

/**
 * 결과 데이터 메모리 릴리즈하기
 */
odbc_free_result($result);

/**
 * 데이터베이스 닫기
 */
odbc_close($conn);



 

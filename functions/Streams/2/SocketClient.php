<?php

/**
 * 스트림 소켓 클라이언트 만들기.
 */
$sock = stream_socket_client('tcp://127.0.0.1:8000', $errno, $errstr);

/**
 * 소켓 서버로 데이터 보내기.
 */
// stream_socket_sendto($sock, "Hello, world");
fwrite($sock, 'Hello, world', 1024);

/**
 * 서버로부터 데이터 받기.
 */
// stream_socket_recvfrom($sock, 1024);
fread($sock, 1024);

/**
 * 클라이언트 종료.
 */
fclose($sock);

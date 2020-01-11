<?php

/**
 * 스트림 소켓 서버 열기.
 */
$server = stream_socket_server('tcp://127.0.0.1:8000', $errno, $errstr);

/**
 * 스트림 서버 만들기.
 */
while ($sock = stream_socket_accept($server)) {
    /**
     * 클라이언트 이름 얻기.
     */
    stream_socket_get_name($sock, true);

    /**
     * 클라이언트로 데이터 보내기.
     */
    // stream_socket_sendto($sock, "Hello, world from Server");
    fwrite($sock, 'Hello, world from Server', 1024);

    /**
     * 클라이언트에게 데이터 받기.
     */
    // stream_socket_recvfrom($sock, 1024);
    fread($sock, 1024);

    /**
     * 클라이언트와 연결 종료하기.
     */
    fclose($sock);
}

/**
 * 소켓 서버 종료.
 */
fclose($server);

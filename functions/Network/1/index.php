<?php

/**
 * Http 헤더.
 */
// 헤더 설정하기
header('X-MyHeader: Hello, world');
// 헤더 삭제하기
header_remove('X-MyHeader');
// 전송한 헤더 목록 확인하기
headers_list();

/*
 * 네트워크 (호스트, 포트 등)
 */
// 호스트로 IP 구하기
gethostbyname('localhost');
// 포트로 서비스를 구하기
getservbyport(80, 'tcp');
// IP 로 호스트의 이름 구하기
gethostbyaddr($_SERVER['REMOTE_ADDR']);

/*
 * HTTP 상태 코드
 */
// 코드만 반환하기
http_response_code(200);
// 헤더 함수로 반환하기
header('HTTP/1.1 200 OK');

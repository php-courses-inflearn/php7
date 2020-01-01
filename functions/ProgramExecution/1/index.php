<?php

/**
 * 명령어 실행 
 */
// -> String (마지막 줄)
exec("dir", $output);
// -> String
shell_exec("dir");
// -> Output stream
system("dir");
// -> String
`dir`;

/**
 * 명령어 이스케이핑
 */
// 파라매터 이프케이프
escapeshellarg("php --ini");
// 명령어 이스케이프
escapeshellcmd("php --ini && php - a");
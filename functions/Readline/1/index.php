<?php

/**
 * 사용자로 부터 라인 읽기
 */
$line = readline();

/**
 * 히스토리에 추가하기
 */
readline_add_history($line);

/**
 * 히스토리 기록하기
 */
readline_write_history(__DIR__."/logs/log.txt");

/**
 * 기록된 히스토리 읽기
 */
// -> bool
readline_read_history(__DIR__."/logs/log.txt");

/**
 * 히스토리 날리기
 */
readline_clear_history();
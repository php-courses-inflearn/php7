<?php

/**
 * 특정 형식인지 / 타입인지 검사하기.
 */

// 형식 검사하기
filter_var('http://example.com', FILTER_VALIDATE_URL);
// 타입 검사하기
filter_var(10, FILTER_VALIDATE_INT);

/*
 * 허용하지 않는 / 지저분한 형태는 수정하기
 */
filter_var('<html><head></head></html>', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

/*
 * 특정 타입에 포함되는지 살펴보기 (INPUT_<빌트인 글로벌 배열>)
 */
filter_has_var(INPUT_SERVER, 'REMOTE_ADDR');

/*
 * 요청 파라매터 검증하기
 */
filter_input(INPUT_GET, 'addr', FILTER_VALIDATE_IP);

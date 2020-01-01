<?php

/**
 * 출력 스트림 열기
 */
// 스트림 열기
ob_start();
// 콜백과 함께 열기
ob_start(function (string $buf) {
    return $buf ? "Output Control with Callback: ".$buf : "";
});

/**
 * 출력 스트림 컨텐츠 얻기
 */
echo "Hello, world";
ob_get_contents();

/**
 * 출력 스트림 길이 얻기
 */
ob_get_length();

/**
 * 출력 스트림 정보 얻기
 */
ob_get_status();

/**
 * 남은 출력 스트림을 모두 내보내기
 */
ob_flush();

/**
 * 출력 스트림 닫기
 */
ob_clean();

/**
 * 출력 스트림 복합 함수
 */
// 스트림을 지우고 스트림 닫기
ob_start();
ob_end_clean();
// 출력 스트림을 모두 내보내고 스트림 닫기
ob_start();
ob_end_flush();
// 컨텐츠 얻고 스트림 지우기
ob_start();
ob_get_clean();
// 컨텐츠 얻고 스트림 내보내기
ob_start();
ob_get_flush();
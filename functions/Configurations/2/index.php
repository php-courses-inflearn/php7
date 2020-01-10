<?php

/**
 * 테스트 옵션 설정하기.
 *
 * PHP.ini
 *
 * zend.assertions = 1
 */
// 테스트 활성화
assert_options(ASSERT_ACTIVE, true);
// 테스트 실패시 스크립트 중지
assert_options(ASSERT_BAIL, false);
// PHP Trace 생성여부
assert_options(ASSERT_WARNING, true);
// 테스트 콜백
assert_options(ASSERT_CALLBACK, 'assert_failure');

function assert_failure(...$args)
{
    var_dump($args);
}

/**
 * 최종 값이 FALSE 인지 검증하기.
 */
function test_assert($arg1)
{
    assert(is_bool($arg1), __FUNCTION__);
}

test_assert('Hello, world');

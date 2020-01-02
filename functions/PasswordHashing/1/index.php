<?php

/**
 * 패스워드를 위한 해시값 생성.
 */
$hash = password_hash("Hello, world", PASSWORD_BCRYPT);

/*
 * 해시값 검증
 */
password_verify("Hello, world", $hash);
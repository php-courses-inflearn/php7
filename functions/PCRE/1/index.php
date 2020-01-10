<?php

/**
 * 정규 표현식으로 매치 문자 찾기.
 */

preg_match("/^(http:?)\/\/(.*?)(\..*?)$/", 'http://example.com', $matches);

/**
 * 매치되는 모든 문자 찾기.
 */
preg_match_all("/<([hH][1-6])>(.*?)<\/\\1>/", <<<'HTML'
<section>
    <h1>Lorem Ipsum</h1>
    <article>
        <h2>What is Lorem Ipsum?</h2>
    </article>
</section>
HTML
, $matches);

/**
 * 매치되는 문자에 특정 형태로 치환하기.
 */
// preg_replace("/^(.*?)@(.*?)$/", "http://$2?user=$1", "pronist@naver.com");
preg_filter('/^(.*?)@(.*?)$/', 'http://$2?user=$1', 'pronist@naver.com');

// 콜백과 함께 사용하기
preg_replace_callback('/^(.*?)@(.*?)$/', function ($m) {
    var_dump($m);
}, 'pronist@naver.com');

/**
 * 배열에서 매치되는 항목 고르기.
 */
preg_grep('/^(.*?)@(.*?)$/', [
    'php://stdout',
    'pronist@naver.com',
    'foo@example.com',
]);

/**
 * 문자열을 정규 표현식 형태로 만들기.
 */
preg_quote('pronist@naver.com');

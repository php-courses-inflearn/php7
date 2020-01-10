<?php

/**
 * 'posts' 배열 만들기.
 */

$blog = [
    'title'      => 'Lorem Ipsum',
    'categories' => [
        'all' => [
            [
                'title'   => 'What is Lorem Ipsum?',
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            ],
            [
                'title'   => 'Why do we use it?',
                'content' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            ],
            [
                'title'   => 'Where does it come from?',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply random text.',
            ],
        ],
    ],
];

/*
 * 배열의 맨 끝에 값 추가하기
 */
array_push($blog['categories']['all'], [
    'title'   => 'Hello, world',
    'content' => 'hello, world',
]);

/*
 * 배열의 맨 끝의 값 삭제하기
 */
array_pop($blog['categories']['all']);

/*
 * 배열에서 요소를 필터링하기
 */
array_filter($blog['categories']['all'], function ($post) {
    return $post['title'] == 'What is Lorem Ipsum?';
});

/*
 * 배열에 키가 있는지 검증하기
 */
array_key_exists('title', $blog);

/*
 * 배열을 기반으로 새로운 배열을 만들기
 */
array_map(function ($post) {
    return $post['title'];
}, $blog['categories']['all']);

/*
 * 배열에서 특정 값의 키를 찾기
 */
array_search('Lorem Ipsum', $blog);

/***************************/

/**
 * 숫자 배열 생성하기.
 */

// $numbers = [1,2,3,4,5];
$numbers = range(1, 5);

/*
 * 배열의 요소 접기
 */
array_reduce($numbers, function ($carry, $num) {
    return $carry += $num * 2;
});

/*
 * 배열에 요소가 있는지 체크하기
 */
in_array(1, $numbers);

/*
 * 배열의 키만 얻기
 */
array_keys($numbers);

/*
 * 배열의 값만 얻기
 */
array_values($numbers);

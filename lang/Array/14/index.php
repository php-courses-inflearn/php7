<?php

/**
 * Deifne 'posts' array.
 */

$posts = [
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
];

/*
 * Push new Element
 */
array_push($posts, [
    'title'   => 'Where can I get some?',
    'content' => 'There are many variations of passages of Lorem Ipsum available,
        but the majority have suffered alteration in some form, by injected humour,
        or randomised words which don\'t look even slightly believable.',
]);

/*
 * Remove last element
 */
array_pop($posts);

/*
 * Filter array
 */
array_filter($posts, function ($post) {
    return $post['title'] == 'What is Lorem Ipsum?';
});

/*
 * Check specific Key exists
 */
array_key_exists('title', current($posts));

/*
 * Get titles
 */
array_map(function ($post) {
    return $post['title'];
}, $posts);

/***************************/

$numbers = range(1, 5);

array_reduce($numbers, function ($carry, $num) {
    return $carry += $num * 2;
});

/*
 * Check if value is included in array
 */
in_array(1, $numbers);

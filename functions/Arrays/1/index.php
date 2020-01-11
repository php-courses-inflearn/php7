<?php

/**
 * Define 'posts Array
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
 * Push a eleement
 */
array_push($blog['categories']['all'], [
    'title'   => 'Hello, world',
    'content' => 'hello, world',
]);

/*
 * Delete a eleement
 */
array_pop($blog['categories']['all']);

/*
 * Filtering
 */
array_filter($blog['categories']['all'], function ($post) {
    return $post['title'] == 'What is Lorem Ipsum?';
});

/*
 * Validate key
 */
array_key_exists('title', $blog);

/*
 * Make an array from another array
 */
array_map(function ($post) {
    return $post['title'];
}, $blog['categories']['all']);

/*
 * Find a key
 */
array_search('Lorem Ipsum', $blog);

/***************************/

/**
 * Generate Numbers array
 */

// $numbers = [1,2,3,4,5];
$numbers = range(1, 5);

/*
 * Folding
 */
array_reduce($numbers, function ($carry, $num) {
    return $carry += $num * 2;
});

/*
 * Check element in array
 */
in_array(1, $numbers);

/*
 * Get array keys
 */
array_keys($numbers);

/*
 * Get array values
 */
array_values($numbers);

/**
 * Make a array from variables
 */
$message = 'Hello, world'; // String
$userCount = 0; // Int
$pi = 3.14; // Double
$is_visited = false; // Boolean
$temp = null; // NULL

compact('message', 'userCount', 'pi', 'is_visited', 'temp');

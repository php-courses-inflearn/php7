<?php

/**
 * Comparison Operators.
 */

10 == '10'; // true
10 === '10'; // false
// 10 <> "10"
10 != '10'; // false
10 !== '10'; // true
// 'ab' >= 'ac'
'ab' > 'ac'; // false
// '6x' <= 20
'6x' < 20; // true

10 <=> 20; // -1
10 <=> 10; // 0;
20 <=> 10; // 1

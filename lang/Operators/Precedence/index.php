<?php

/**
 * Operator Precedence.
 *
 * Comparison > Logical
 */
// true && (true == true) && false
true && 10 < 20 == true && 10 > 20; // false

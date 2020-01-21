<?php

/**
 * Read a line
 */
echo $line = readline('prompt >> ');

/**
 * Add readline history
 */
readline_add_history($line);

/**
 * Clear history
 */
readline_clear_history();

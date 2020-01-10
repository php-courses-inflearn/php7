<?php

if (!file_exists('./Links')) {
    mkdir('./Links');
}

/*
 * 하드 링크
 */
if (!file_exists('./Links/hardlink-README.md')) {
    link(dirname(__DIR__, 3).'/README.md', './Links/hardlink-README.md');
}

/*
 * 심볼릭 링크
 */
if (!file_exists('./Links/symlink-README.md')) {
    symlink(dirname(__DIR__, 3).'/README.md', './Links/symlink-README.md');
} else {
    /**
     * 심볼릭 링크 읽기.
     */
    readlink('./Links/symlink-README.md');
}

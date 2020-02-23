<?php

// 24분
ini_set('session.gc_maxlifetime', 1440);
// PHPSESSID
echo ini_get('session.name');

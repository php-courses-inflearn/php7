<?php

// 4
echo __LINE__;

// ... /Const/3/index.php
echo __FILE__;

// ... /Const/3
echo __DIR__;

function foo()
{
    echo __FUNCTION__;
}

// foo
foo();

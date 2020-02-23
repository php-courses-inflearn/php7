<?php

/**
 * Getting CSRF TOKEN.
 *
 * @return string|bool
 */
function token()
{
    if (isset($_SESSION['token'])) :
        return $_SESSION['token'];
    else :
            return false;
    endif;
}

/**
 * Verification CSRF TOKEN.
 *
 * @param string $token
 *
 * @return bool
 */
function verify(string $token): bool
{
    if (hash_equals($_SESSION['token'], $token)) :
        return true;
    else :
            return false;
    endif;
}

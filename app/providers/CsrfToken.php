<?php

require_once __DIR__ . '/../lib/CsrfToken.php';

/*
 * Generate CSRF TOKEN
 *
 * with FORM
 * <input type="hidden" name="csrf_token" value="<?=token();?>">
 */
if (empty($_SESSION['token'])) :
    $_SESSION['token'] = bin2hex(random_bytes(32));
endif;

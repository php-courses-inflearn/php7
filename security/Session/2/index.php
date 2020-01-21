<?php

/**
 * Timestamp based session.
 */
date_default_timezone_set('Asia/Seoul');

session_save_path('sessions');
session_start();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $_SESSION['timestamp'] = time();

        echo '<button id=renewal>Renewal Session</button>';
        echo <<<'HTML'
<script>
    function sessionTimeOut(timeOut) {
        return setTimeout(() => {
            console.log('Destory a Session');
            fetch('/', {
                method: 'post'
            });
        }, timeOut);
    }
    let id = sessionTimeOut(3000);

    document.querySelector('#renewal').addEventListener('click', () => {
        fetch('/', {
            method: 'post',
            body: JSON.stringify({ refresh: true })
        }).then(async res => {
            if (res.ok) {
                clearTimeout(id);
                return id = sessionTimeOut(3000);
            }
        });
    });
</script>
HTML;
        break;
    case 'POST':
        if ($json = file_get_contents('php://input')) {
            $_POST = json_decode($json, true);
            $diff = date('s', time() - $_SESSION['timestamp']);
            $sessionTimeOutSeconds = 3;

            if (isset($_POST['refresh']) && $diff <= $sessionTimeOutSeconds) {
                // session_regenerate_id();
                $_SESSION['timestamp'] = time();
            } else {
                // Session TimeOut
                http_response_code(400);
            }
            break;
        }
        // session_regenerate_id();
        session_destroy();
        break;
}

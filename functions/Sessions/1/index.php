<?php

// CREATE TABLE sessions(id VARCHAR(255) UNIQUE NOT NULL, payload TEXT);

/**
 * Session Handler Interface
 */

class MySqlSessionHanlder implements SessionHandlerInterface
{
    private $dbh;

    /**
     * Create a new MySqlSessionHandler
     *
     * @return MySqlSessionHanlder
     */
    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=myapp_test;host=127.0.0.1', 'root', 'root');
    }

    /**
     * Open Session
     *
     * @param string $save_path
     * @param string $session_name
     *
     * @return bool
     */
    public function open($save_path, $session_name)
    {
        return true;
    }

    /**
     * run Session GC
     *
     * @param int $maxlifetime
     *
     * @return bool
     */
    public function gc($maxlifetime)
    {
        return true;
    }

    /**
     * destroy Session
     *
     * @param string $session_id
     *
     * @return bool
     */
    public function destroy($session_id)
    {
        $sth = $this->dbh->prepare('DELETE FROM sessions WHERE id = :id');
        return $sth->execute([ ':id' => $session_id ]);
    }

    /**
     * close Session
     *
     * @return bool
     */
    public function close()
    {
        return true;
    }

    /**
     * read session payload
     *
     * @param string $session_id
     *
     * @return string
     */
    public function read($session_id)
    {
        $sth = $this->dbh->prepare('SELECT * FROM sessions WHERE id = :id');
        if ($sth->execute([ ':id' => $session_id ])) {
            if ($sth->rowCount() > 0) {
                $payload = $sth->fetchObject()->payload;
            } else {
                $sth = $this->dbh->prepare('INSERT INTO sessions(id) VALUES(:id)');
                $sth->execute([ ':id' => $session_id ]);
            }
        }
        return $payload ?? '';
    }

    /**
     * write session data
     *
     * @param string $session_id
     * @param string $session_data
     *
     * @return bool
     */
    public function write($session_id, $session_data)
    {
        $sth = $this->dbh->prepare('UPDATE sessions SET payload = :payload WHERE id = :id');
        return $sth->execute([ ':payload' => $session_data, ':id' => $session_id ]);
    }
}

session_set_save_handler(new MySqlSessionHanlder(), true);

session_start();

$_SESSION['message'] = 'Hello, world';
$_SESSION['foo'] = new stdClass();

// -> Hello, world
var_dump($_SESSION);

session_destroy();

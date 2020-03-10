<?php

/**
 * PDO (MySQL)
 */

try {
    $dbh = new PDO('mysql:dbname=myapp_test;host=127.0.0.1;', 'root', 'root');

    /**
     * Execution
     */
    // exec
    $dbh->exec('CREATE TABLE tests(id INT PRIMARY KEY AUTO_INCREMENT)');

    // prepare
    $sth = $dbh->prepare('SELECT * FROM posts WHERE user_id = :user_id LIMIT 10');

    // $sth->bindParam(':user_id', 478, PDO::PARAM_INT);
    if ($sth->execute([ ':user_id' => 478 ])) {
        while ($row = $sth->fetchObject()) {
            var_dump($row->title);
        }
    }

    foreach ($dbh->query('SELECT * FROM posts WHERE user_id = 478 LIMIT 10', PDO::FETCH_CLASS, 'stdClass') as $post) {
        var_dump($post->title);
    }

    /**
     * Transaction
     */
    $dbh->beginTransaction();

    if ($dbh->inTransaction()) {
        $dbh->exec('DELETE FROM posts WHERE user_id = 478');
        $dbh->rollback();
    }

    $dbh->exec('DROP TABLE tests');
} catch (PDOException $e) {
    return var_dump($e->getMessage());
}

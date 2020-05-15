<?php

// CREATE TABLE cache(`key` VARCHAR(255) PRIMARY KEY, `value` TEXT NOT NULL, `expiration` INT DEFAULT NULL, `created_at` TIMESTAMP);

/**
 * MySQL Backend Cache
 */
class Cache
{
    /**
     * @var PDO $driver
     */
    private $driver;

    /**
     * Create a Cache Instance
     *
     * @param PDO $driver
     *
     * @return Cache
     */
    public function __construct(PDO $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Cache value by key
     *
     * @param string $key
     * @param Closure $callback
     *
     * @return mixed
     */
    public function get(string $key, Closure $callback = null): mixed
    {
        $sth = $this->driver->prepare('SELECT * FROM cache WHERE `key` = ?');

        if ($sth->execute([ $key ]) && $row = $sth->fetchObject()) {
            return $row->value;
        }
        return $callback ? call_user_func($callback) : null;
    }

    /**
     * Store Cache value with key
     *
     * @param string $key
     * @param string $value
     * @param int $expiration
     *
     * @return bool
     */
    public function put(string $key, string $value, int $expiration = null): bool
    {
        $sth = $this->driver->prepare('INSERT INTO cache(`key`, `value`, `expiration`) VALUES(?, ?, ?)');
        return $sth->execute([ $key, $value, $expiration ]);
    }

    /**
     * Remove Cache value by key
     *
     * @param string $key
     *
     * @return bool
     */
    public function forget(string $key): bool
    {
        $sth = $this->driver->prepare('DELETE FROM cache WHERE `key` = ?');
        return $sth->execute([ $key ]);
    }

    /**
     * Remove all caches
     *
     * @return bool
     */
    public function flush(): bool
    {
        return $this->driver->exec('TRUNCATE cache');
    }

    /**
     * Refresh Cache value
     *
     * @return void
     */
    public function refresh(): void
    {
        $sth = $this->driver->prepare('SELECT * FROM cache');

        if ($sth->execute()) {
            $now = strtotime('now');
            while ($row = $sth->fetchObject()) {
                $createdAt = strtotime($row->created_at);
                $invalidCaches = [];
                if ($now - $createdAt > $row->expiration) {
                    $invalidCaches[] = $row->key;
                }
            }
            array_walk($invalidCaches, fn ($key) => $this->forget($key));
        }
    }
}

$cache = new Cache(new PDO('mysql:dbname=myapp_test;host=127.0.0.1;', 'root', 'root'));

// $cache->put('Message', 'Hello, world');

$cache->refresh();

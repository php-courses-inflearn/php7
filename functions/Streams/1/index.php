<?php

/**
 * Stream Wrapper
 */
class StringStreamWrapper
{
    /**
     * @var array $varname
     */
    private $varname;

    /**
     * @var int $position
     */
    private $position = 0;

    /**
     * streamWrapper::stream_opens
     *
     * @param string $path
     * @param string $mode
     * @param int $options
     * @param string $opened_path
     *
     * @return bool
     */
    public function stream_open($path, $mode, $options, &$opened_path)
    {
        [ 'host' => $varname ] = parse_url($path);
        $this->varname = $varname;

        return true;
    }

    /**
     * streamWrapper::stream_write
     *
     * @param string $data
     *
     * @return int
     */
    public function stream_write($data)
    {
        $GLOBALS[$this->varname] .= substr($GLOBALS[$this->varname], 0, $this->position) . $data;
        return strlen($data);
    }

    /**
     * streamWrapper::stream_read
     *
     * @param int $count
     *
     * @return string
     */
    public function stream_read($count)
    {
        $res = substr($GLOBALS[$this->varname], $this->position, $count);
        $this->position += strlen($res);

        return $res;
    }

    /**
     * streamWrapper::stream_tell
     *
     * @return int
     */
    public function stream_tell()
    {
        return $this->position;
    }

    /**
     * streamWrapper::stream_eof
     *
     * @return bool
     */
    public function stream_eof()
    {
        return $this->position >= strlen($GLOBALS[$this->varname]);
    }
}

stream_register_wrapper('string', 'StringStreamWrapper');

$message = null;

$fp = fopen("string://message", "r+");

fwrite($fp, "Hello, world\n");
fwrite($fp, "Who are you?\n");
fwrite($fp, "Bye\n");

while ($row = fgets($fp)) {
    echo $row;
}

fclose($fp);

var_dump($message);

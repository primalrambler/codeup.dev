<?php

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function has($key)
    {
        return isset($_SESSION[$key]);
    }

    public function __get($key)
    {
        return $_SESSION[$key];
    }

    public function __set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
}

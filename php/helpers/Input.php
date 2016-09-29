<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        return (self::has($key)) ? htmlspecialchars(strip_tags($_REQUEST[$key])) : $default;
    }

    /**
     * Check if a value is numeric
     *
     * @param string $key index to look for in index
     * @return bool value passed in request
     */
    public static function checkNumeric($key)
    {
        return is_numeric(trim(static::get($key)));
    }


    public static function getString($key, $default = null)
    {
        if (!self::has($key) && $default === null) {
            throw new Exception("$key does not exist");
        } else if (is_string(self::get($key, $default)) && !is_numeric(self::get($key, $default))) {
            return self::get($key, $default);
        } else {
            throw new Exception($key . ' must be a string');
        }
    }
    
    public static function getNumber($key, $default = null)
    {
        if (!self::has($key) && $default === null) {
            throw new Exception("$key does not exist");
        } else if (is_numeric(self::get($key, $default))) {
            return floatval(self::get($key, $default));
        } else {
            throw new Exception($key . ' must be a number');
        }
    }





    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

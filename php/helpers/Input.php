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

    public static function getString($key)
    {
        if (! self::has($key){
            throw new Exception("$key does not exist")
        } elseif (is_string(self::get($key)) && !self::checkNumeric($key)){
            return self::get($key);
        } else {
            throw new Exception($key . 'value must be a string!');
        }
    }

    public static function getNumber($key)
    {
        if (! self::has($key) && ! self::checkNumeric($key)){
            throw new Exception($key . 'value must be a number!');
        }
        return floatval(self::get($key));
    }






    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

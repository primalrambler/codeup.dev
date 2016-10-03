<?php

class InvalidArgumentException extends Exception { }
class OutOfRangeException extends InvalidArgumentException { }
class DomainException extends InvalidArgumentException { }
class LengthException extends InvalidArgumentException { }
class RangeException extends InvalidArgumentException { }

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


    public static function getString($key, $min, $max, $default = null)
    {
        // check parameters are the correct type 
        if (!is_string($key) || !is_numeric($min) || !is_numeric($max)){
            throw new InvalidArgumentException ("Invalid Argument");
        }

        //check for missing key, min and max
        if (!self::has($key) && $default === null) {
            throw new OutOfRangeException("$key does not exist");
        } 
        if (!self::has($min) || !self::has($max)) {
            throw new OutOfRangeException("min/max range value is missing");
        } 

        //check values for the correct type
        if (!is_string(self::get($key, $default))){
            throw new DomainException("Value must be a string");
        } 

        // check for string length
        if (strlen(self::get($key, $default)) < $min || strlen(self::get($key, $default)) > $max ){
            throw new LengthException("String does not meet length requirements")
        } 

        return self::get($key, $default);
       
    }
    
    public static function getNumber($key, $min, $max, $default = null)
    {
        // check parameters are the correct type 
        if (!is_string($key) || !is_numeric($min) || !is_numeric($max)){
            throw new InvalidArgumentException ("Invalid Argument");
        }

        //check for missing key, min and max
        if (!self::has($key) && $default === null) {
            throw new OutOfRangeException("$key does not exist");
        } 
        if (!self::has($min) || !self::has($max)) {
            throw new OutOfRangeException("min/max range value is missing");
        } 

        //check values for the correct type
        if (!is_numeric(self::get($key, $default))){
            throw new DomainException("Value must be a number");
        } 

        // check number is in range
        if (self::get($key, $default) < $min || self::get($key, $default) > $max ){
            throw new LengthException("Value must be bound by $min and $max");
        } 

        return floatval(self::get($key, $default));
    }





    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

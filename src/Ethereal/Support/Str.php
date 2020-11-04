<?php

namespace Ethereal\Support;

class Str
{
    public static function toUpperCase($input)
    {
        return strtoupper($input);
    }
  
    public static function toLowerCase($input)
    {
        return strtolower($input);
    }
  
    public static function toCapitalize($input)
    {
        return ucwords($input);
    }
  
    /**
     * Example: login user name -> loginUserName
     *
     * @param string $input
     *
     * @return string
     */
    public static function toCamelCase($input)
    {
        return $input;
    }
  
    /**
     * Example: login user name -> LoginUserName
     *
     * @param string $input
     *
     * @return string
     */
    public static function toPascalCase($input)
    {
        return $input;
    }
  
    /**
     * Example: login user name -> login_user_name
     *
     * @param string $input
     *
     * @return string
     */
    public static function toSnakeCase($input)
    {
        return $input;
    }
  
    /**
      * Example: login user name -> login-user-name
      *
      * @param string $input
      *
      * @return string
      */
    public static function toKebabCase($input)
    {
        return $input;
    }
}

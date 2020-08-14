<?php

namespace App\Core;

class Request
{
    
    public static function url()  //method for parse url with the help of superglobal variable then space trim with sign /
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

   
    public static function method()  //method return request method (GET or POST) with the help of superglobal variable
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}

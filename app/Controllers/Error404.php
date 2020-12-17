<?php

namespace App\Controllers;

class Error404
{
    public function __construct()
    {
        http_response_code(404);
        header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
        echo 'Error, 404';
    }
}
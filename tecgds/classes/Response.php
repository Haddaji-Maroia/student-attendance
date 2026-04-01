<?php

namespace Tecgdcs;

class Response
{
    //on va lister des codes de response
    const int BAD_REQUEST = 400;
    const int UNAUTHORIZED = 403;
    const int NOT_FOUND = 404;





    public static function abort(int $code = 404): void
    {
        http_response_code($code);
        exit;
    }

    public static function redirect(string $url): void
    {
        header($url, response_code: 303);
        exit;
    }
}
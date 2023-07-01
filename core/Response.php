<?php

namespace app\core;

/**
 * Summary of Response
 * @author ZYLAL
 * @copyright (c) 2022
 */
class Response
{

    public function statusCode(int $code)
    {
        http_response_code($code);
    }
}

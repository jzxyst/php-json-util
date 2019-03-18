<?php

namespace Jzxyst;

class Json
{
    /**
     * Convert JSONP to JSON.
     * @param $jsonp
     * @return string|string[]|null
     */
    public static function convertJsonpToJson($jsonp) {
        return preg_replace('/.+?({.+}).+/', "$1", $jsonp);
    }
}